<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ComplaintResource\Pages;
use App\Models\Complaint;
use App\Models\Penilaian;
use App\Models\TeknisiOnComplaint;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Infolists\Components\ImageEntry;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ComplaintResource extends Resource
{
    protected static ?string $model = Complaint::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationLabel = 'Complaint';
    protected static ?string $title = 'Complaint';

     public static function getNavigationBadge(): ?string
    {
        if(Auth::user()->hasRole('teknisi'))
        {
            return (string) Complaint::leftJoin('teknisi_on_complaints','complaints.id','=','teknisi_on_complaints.complaint_id')->where('complaints.status', 'proses')->where('teknisi_id','=',auth()->user()->id)->count();
        }
        if(Auth::user()->hasRole('user'))
        {
            return (string) Complaint::where('status', 'finish')->where('user_id',auth()->user()->id)->count();
        }
        if(Auth::user()->hasRole('koordinator'))
        {
            return (string) Complaint::where('status', 'request')->where('tower_id','=',auth()->user()->tower->id)->count();
        }

        return (string) Complaint::where('status', 'request')->count();
    }
    public static function getNavigationBadgeColor(): ?string
    {
        return 'danger';
    }


    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                // Textarea::make('Address')
                //     ->label('Address')
                //     ->required()
                //     ->dehydrated(false)
                //     ->default(function (?Complaint $record) {
                //         if (auth()->user()->hasRole('tenknisi')) {
                //             dd($record->unit);
                //             return $record->unit->lantai->tower->rusun->address . ', ' .
                //                 auth()->user()->unit->lantai->tower->name . ', ' .
                //                 auth()->user()->unit->lantai->name . ', ' .
                //                 auth()->user()->unit->name;
                //         } else {
                //             dd($record)->unit;
                //             return null;

                //         }
                //     })
                //     ->columnSpanFull(),

                    Forms\Components\Select::make('koor_id')
                    ->label('Verified by')
                    ->options(\App\Models\User::whereHas('roles', function ($query) {
                        $query->where('name', 'koordinator');
                    })->pluck('name', 'id')) // tampilkan nama, tapi value tetap ID
                    ->default(Auth::id())
                    ->disabled(auth()->user()->hasRole('user')) // jika user biasa, tidak bisa diubah
                    ->hidden(!auth()->user()->hasRole('super_admin') ),

                    Forms\Components\Select::make('user_id')
                    ->label('Penghuni')
                    ->options(\App\Models\User::pluck('name', 'id')) // tampilkan nama, tapi value tetap ID
                    ->default(Auth::user()->hasRole('tenknisi') ? Auth::user()->id : null) // jika user biasa, ambil ID user yang login
                    ->hidden(!auth()->user()->hasRole('super_admin')), // hanya tampil kalau bukan user,
                Forms\Components\Select::make('status')
                    ->options([
                        // KOOR
                        'proses' => 'proses',
                        'pending' => 'pending',
                        'deny' => 'deny',
                    ])
                    ->default(fn(?Complaint $record) => $record?->status ?? 'request')
                    ->hidden(auth()->user()->hasRole('teknisi') || auth()->user()->hasRole('user') ),
                Forms\Components\Select::make('status')
                    ->options([
                        // 'request' => 'request',
                        'finish' => 'finish',
                        // 'finish' => 'finish',
                        're-schedule' => 're-schedule'
                    ])
                    ->default(fn(?Complaint $record) => $record?->status ?? 'accept')
                    ->hidden(!auth()->user()->hasRole('super_admin') ),
                // Forms\Components\Select::make('status')
                //     ->options([
                //         'finish' => 'finish',
                //         're-schedule' => 're-schedule',
                //     ])
                //     ->default(fn(?Complaint $record) => $record?->status ?? 'request')
                //     ->hidden(!auth()->user()->hasRole('tenknisi')),
                Forms\Components\DatePicker::make('tanggal_eksekusi')
                    ->default(now())
                    ->hidden(auth()->user()->hasRole('user'))
                    ->placeholder('Tanggal Eksekusi'),
                Forms\Components\Textarea::make('complaint')
                    ->required()
                    ->columnSpanFull()
                    ->disabled(auth()->user()->hasRole('tenknisi') || auth()->user()->hasRole('koordinator')),
                    Forms\Components\FileUpload::make('photo1')
                    ->required()
                    ->image()
                    ->disk('public')
                    ->directory('complaints')
                    ->disabled(auth()->user()->hasRole('teknisi') || auth()->user()->hasRole('koordinator'))
                    ->getUploadedFileNameForStorageUsing(function ($file) {
                        return uniqid() . '-' . $file->getClientOriginalName();
                    })
                    ->columnSpanFull(),

                Forms\Components\FileUpload::make('photo2')
                    ->image()
                    ->downloadable()
                    ->disk('public')
                    ->directory('complaints')
                    ->disabled(auth()->user()->hasRole('teknisi') || auth()->user()->hasRole('koordinator'))
                    ->getUploadedFileNameForStorageUsing(function ($file) {
                        return uniqid() . '-' . $file->getClientOriginalName();
                    })
                    ->columnSpanFull(),

                Forms\Components\FileUpload::make('photo3')
                    ->label('Bukti Selesai')
                    ->image()
                    ->disk('public')
                    ->directory('complaints')
                    ->disabled(!auth()->user()->hasRole('teknisi'))
                    ->getUploadedFileNameForStorageUsing(function ($file) {
                        return uniqid() . '-' . $file->getClientOriginalName();
                    })
                    ->required(auth()->user()->hasRole('teknisi'))
                    ->hidden(auth()->user()->hasRole('user'))
                    ->columnSpanFull(),

                Forms\Components\Textarea::make('keterangan')
                    ->hidden(auth()->user()->hasRole('user'))
                    ->columnSpanFull(),


                Repeater::make('TeknisiOnComplaint')
                    ->label('Teknisi Yang Ditugaskan')
                    ->relationship()
                    ->schema([
                        Select::make('teknisi_id')
                            ->label('Nama Teknisi')
                            ->required()
                            ->options(User::role('teknisi')->pluck('name', 'id')->toArray()),
                        Select::make('status')
                            ->label('Status')
                            ->disabled(auth()->user()->hasRole('koordinator'))
                            ->options([
                                'accept'=>'Accept',
                                'denied'=>'Denied',
                            ]),
                        FileUpload::make('image')
                            ->image()
                            ->label('Bukti Selesai')
                            ->downloadable()
                            ->disabled(auth()->user()->hasRole('koordinator'))

                    ])
                    ->defaultItems(1)
                    ->minItems(1)
                    ->reorderable(true)
                    ->addActionLabel('Tambah Teknisi')
                    ->columnSpanFull()
                    ->hidden(auth()->user()->hasRole('user'))
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('No')
                //     ->label('No')
                //     ->rowIndex(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Complaint')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('complaint')
                    ->label('Complaint')
                    ->searchable(isIndividual:true) // mencari data
                    ->sortable()
                    ->limit(50)
                    ->wrap(),
                Tables\Columns\ImageColumn::make('photo1')
                ->label('Photo')
                ->circular()
                 ,
                // Tables\Columns\TextColumn::make('unit.name')
                //     ->label('Rusun')
                //     ->formatStateUsing(function ($state, $record) {
                //         return "{$record->unit->lantai->tower->rusun->name} ,{$record->unit->lantai->name} ,{$record->unit->lantai->tower->name},{$record->unit->name}";
                //     })
                //     ->sortable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('User Complaint')
                    ->searchable(isIndividual:true) // mencari data
                    ->sortable(),
                Tables\Columns\TextColumn::make('koor.name')
                    ->label('Koordinator')
                    ->default('-')
                    ->color('black')
                    ->searchable(isIndividual:true) // mencari data
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                ->label('Status')
                ->sortable()
                ->searchable(isIndividual:true) // mencari data
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'accept' => 'primary',
                    'finish' => 'success',
                    'completed' => 'success',
                    'request' => 'gray',
                    'pending' => 'warning',
                    'proses' => 'info',
                    'deny' => 'danger',
                }),
                Tables\Columns\TextColumn::make('tanggal_eksekusi')
                    ->date()
                    ->sortable()
                    ->searchable(isIndividual:true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make()
                ->hidden(!auth()->user()->hasRole('super_admin')),

            ])
            ->actions([
                Tables\Actions\Action::make('Update Teknisi')
                    ->label('Update')
                    ->button()
                    // ->color(function (?Complaint $record) {
                    //     if (in_array($record?->status, ['accept', 'finish'])) {
                    //         return 'success';
                    //     }
                    //     return 'danger';
                    // })
                    ->hidden(function(?Complaint $record){
                        return !auth()->user()->hasRole('teknisi') || $record->status=="finish" || $record->status=="completed" ;
                    } )
                    ->modalHeading('Confirmasi Teknisi')
                    ->modalSubheading('Update informasi kamu.')
                    ->modalButton('Finish')
                    ->form([

                        Forms\Components\TextInput::make('Unit')
                        ->disabled()
                        ->default(fn (?Complaint $record) =>  $record?->user->lantai->name.', Unit '. $record?->user->unit->name)
                        ,
                        Forms\Components\DatePicker::make('tanggal_eksekusi')
                        ->disabled()
                        ->default(fn (?Complaint $record) => $record?->tanggal_eksekusi)
                        ,
                        Forms\Components\Textarea::make('complaint')
                        ->disabled()
                        ->default(fn (?Complaint $record) => $record?->complaint)
                        ,
                        Forms\Components\FileUpload::make('photo1')
                        ->image()
                        ->label('Bukti Complaint')
                        ->disabled()
                        ->default(fn (?Complaint $record) => $record?->photo1)
                        ->disk('public')
                        ->directory('complaint'),
                        Forms\Components\Select::make('status')
                            ->required()
                            ->disabled(fn (?Complaint $record)=>$record->status == 'accept')
                            ->options([
                               'accept'=>'Accept',
                               'denied'=>'Denied'
                            ])
                            ->default(function (?Complaint $record) {
                            return $record?->TeknisiOnComplaint
                                ->where('teknisi_id', auth()->user()->id)
                                ->first()
                                ?->status;
                            }),
                        Forms\Components\FileUpload::make('image')
                        ->required()
                        ->label('Bukti Selesai')
                        ->hidden(fn (?Complaint $record)=>$record->status == 'proses')
                        ->image()
                        ->default(function (?Complaint $record) {
                            return $record?->TeknisiOnComplaint
                                ->where('teknisi_id', auth()->user()->id)
                                ->first()
                                ?->image;
                            })
                        ->disk('public')
                        ->directory('bukti_selesai'),
                    ])
                    ->action(function (array $data, ?Complaint $record) {

                        if($record->status=='proses')
                        {
                            TeknisiOnComplaint::where('complaint_id',$record->id)->where('teknisi_id',auth()->user()->id)
                                ->update([
                                'status'=>$data['status']
                                ]);
                        }
                        if($record->status=='accept')
                        {
                            TeknisiOnComplaint::where('complaint_id',$record->id)->where('teknisi_id',auth()->user()->id)
                                ->update([
                                'image'=>$data['image']
                                ]);
                        }


                        $totalTeknisi = TeknisiOnComplaint::where('complaint_id','=',$record->id)->count();
                        $totalTeknisiAccept = TeknisiOnComplaint::where('complaint_id','=',$record->id)->where('status','=','accept')->count();
                        $totalImageUpload = TeknisiOnComplaint::where('complaint_id','=',$record->id)->where('image','!=','')->count();


                        if($record->status=='proses' && $totalTeknisi == $totalTeknisiAccept  )
                        {
                            $record->update([
                                'status'=>'accept'
                            ]);
                        }
                        if($record->status=='accept' && $totalTeknisi == $totalImageUpload  )
                        {
                            $record->update([
                                'status'=>'finish',
                                'photo3'=>$data['image']
                            ]);
                        }

                    }),
                Tables\Actions\Action::make('Rating Modal')
                    ->button()
                    ->color(function (?Complaint $record) {
                        if (in_array($record?->status, ['accept', 'finish'])) {
                            return 'success';
                        }
                        return 'danger';
                    })
                    ->hidden(function(?Complaint $record){
                        return !auth()->user()->hasRole('user') || $record->status=="completed" ||  $record->status=="request" ||  $record->status=="proses" || $record->status=="pending";
                    } )
                    ->modalHeading('Confirmasi Complaint')
                    ->modalSubheading('Update informasi kamu.')
                    ->modalButton('Finish')

                    ->form([
                        Forms\Components\Select::make('rating_layanan')
                            ->required()
                            ->options([
                                1 => '⭐',
                                2 => '⭐⭐',
                                3 => '⭐⭐⭐',
                                4 => '⭐⭐⭐⭐',
                                5 => '⭐⭐⭐⭐⭐',
                            ]),
                        Forms\Components\Select::make('rating_kualitas')
                        ->required()
                        ->options([
                            1 => '⭐',
                            2 => '⭐⭐',
                            3 => '⭐⭐⭐',
                            4 => '⭐⭐⭐⭐',
                            5 => '⭐⭐⭐⭐⭐',
                        ]),
                        Forms\Components\Select::make('rating_kecepatan')
                        ->required()
                        ->options([
                            1 => '⭐',
                            2 => '⭐⭐',
                            3 => '⭐⭐⭐',
                            4 => '⭐⭐⭐⭐',
                            5 => '⭐⭐⭐⭐⭐',
                        ]),
                        Forms\Components\Textarea::make('komentar')
                            ->columnSpanFull(),

                    ])
                    ->action(function (array $data, ?Complaint $record) {
                        $record->update([
                            'status' => 'completed'
                        ]);

                        Penilaian::create([
                            'complaint_id' => $record->id,
                            'user_id' => $record->user_id,
                            'tower_id' => $record->tower_id,
                            'koor_id' => $record->koor_id,
                            'user_verified' => $record->user_verified,
                            'rating_layanan' => $data['rating_layanan'],
                            'rating_kualitas' => $data['rating_kualitas'],
                            'rating_kecepatan' => $data['rating_kecepatan'],
                            'komentar' => $data['komentar'],
                            'status' =>'done'

                        ]);
                    }),

                    Tables\Actions\EditAction::make()
                    ->label('Update')
                    ->button()
                    // ->hidden(fn(?Complaint $record) => in_array($record?->status, ['accept', 'finish'])? true:false),
                    ->hidden(function (?Complaint $record) {
                        // if (auth()->user()->hasRole('teknisi') && $record?->status === 'accept') {
                        //     return true;
                        // }
                        // if (!auth()->user()->hasRole('super_admin') && $record?->status == 'accept') {
                        //     return true;
                        // }
                        if (!auth()->user()->hasRole('super_admin')) {
                            return true;
                        }
                        elseif ($record?->status == 'completed') {
                            return true;
                        }
                        return false;
                    }),
                    Tables\Actions\ViewAction::make(),


            ])

            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                    ->hidden(!auth()->user()->hasRole('super_admin')),
                    Tables\Actions\ForceDeleteBulkAction::make()
                    ->hidden(!auth()->user()->hasRole('super_admin')),
                    Tables\Actions\RestoreBulkAction::make()
                    ->hidden(!auth()->user()->hasRole('super_admin')),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListComplaints::route('/'),
            // 'create' => Pages\CreateComplaint::route('/create'),
            // 'view' => Pages\ViewComplaint::route('/{record}'),
            // 'edit' => Pages\EditComplaint::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
{
    // Mulai dengan query eloquent dasar
    $query = parent::getEloquentQuery();

    // Hilangkan global scope SoftDeletingScope
    $query->withoutGlobalScopes([SoftDeletingScope::class]);

    // Filter berdasarkan user_id, kecuali jika user adalah admin
    if (auth()->user()->hasRole('user')) {
        $query->where('user_id', auth()->id()); // Hanya data yang dimiliki user yang login
    }
    // if (auth()->user()->hasRole('teknisi')) {
    //     $query->where('user_verified', auth()->id())->orWhere('status','=','accept'); // Hanya data yang dimiliki user yang login
    // }

    if(auth()->user()->hasRole('teknsi')){
        $query->leftJoin('teknisi_on_compalints','complaints.id','=','teknisi_on_compalints.complaint_id')->where('teknisi_on_compalints.teknisi_id','=',auth()->user()->id)
        ->select('complaints.*');

    }

    if (auth()->user()->hasRole('koordinator')) {
            // $query->leftJoin('','');
        $query->leftJoin('users', 'complaints.user_id', '=', 'users.id')
            ->leftJoin('towers', 'users.tower_id', '=', 'towers.id')
            ->where('towers.id', auth()->user()->tower_id)
            ->select('complaints.*', 'users.name as user_name', 'towers.id as tower_id');

    }


    return $query->latest('created_at'); // Mengurutkan berdasarkan tanggal terbaru
}

}
