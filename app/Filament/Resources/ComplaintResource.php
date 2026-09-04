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
use Filament\Tables\Filters\SelectFilter;
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
        if (Auth::user()->hasRole('teknisi')) {
            return (string) Complaint::leftJoin('teknisi_on_complaints', 'complaints.id', '=', 'teknisi_on_complaints.complaint_id')->where('complaints.status', 'proses')->where('teknisi_id', '=', auth()->user()->id)->count();
        }
        if (Auth::user()->hasRole('user')) {
            return (string) Complaint::where('status', 'finish')->where('user_id', auth()->user()->id)->count();
        }
        if (Auth::user()->hasRole('koordinator')) {
            $rusunId = auth()->user()->rusun_id;
            $towerIds = \App\Models\Tower::where('rusun_id', $rusunId)->pluck('id')->toArray();
            return (string) Complaint::where('status', 'request')->whereIn('tower_id', $towerIds)->count();
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
                Forms\Components\Select::make('koor_id')
                    ->label('Verified by')
                    ->options(\App\Models\User::whereHas('roles', function ($query) {
                        $query->where('name', 'koordinator');
                    })->pluck('name', 'id'))
                    ->default(Auth::id())
                    ->disabled(auth()->user()->hasRole('user'))
                    ->hidden(!auth()->user()->hasRole('super_admin')),

                Forms\Components\Select::make('user_id')
                    ->label('Penghuni')
                    ->options(\App\Models\User::pluck('name', 'id'))
                    ->default(Auth::user()->hasRole('tenknisi') ? Auth::user()->id : null)
                    ->hidden(!auth()->user()->hasRole('super_admin')),
                Forms\Components\Select::make('status')
                    ->options([

                        'proses' => 'Proses',

                        'deny' => 'Tolak',
                    ])
                    ->default(fn(?Complaint $record) => $record?->status ?? 'request')
                    ->hidden(auth()->user()->hasRole('teknisi') || auth()->user()->hasRole('user')),
                Forms\Components\Select::make('status')
                    ->options([

                        'finish' => 'finish',

                        're-schedule' => 're-schedule'
                    ])
                    ->default(fn(?Complaint $record) => $record?->status ?? 'accept')
                    ->hidden(!auth()->user()->hasRole('super_admin')),

                Forms\Components\DatePicker::make('tanggal_eksekusi')
                    ->default(now())
                    ->hidden(auth()->user()->hasRole('user'))
                    ->placeholder('Tanggal Eksekusi'),
                Forms\Components\DatePicker::make('created_at')
                    ->label('Tanggal Complaint')
                    ->default(now())
                    ->required(),
                Forms\Components\Textarea::make('complaint')
                    ->required()
                    ->columnSpanFull()
                    ->disabled(auth()->user()->hasRole('tenknisi')),
                Forms\Components\FileUpload::make('photo1')
                    ->required()
                    ->image()
                    ->disk('public')
                    ->directory('complaints')
                    ->disabled(auth()->user()->hasRole('teknisi'))
                    ->getUploadedFileNameForStorageUsing(function ($file) {
                        return uniqid() . '-' . $file->getClientOriginalName();
                    })
                    ->columnSpanFull(),

                Forms\Components\FileUpload::make('photo2')
                    ->image()
                    ->downloadable()
                    ->disk('public')
                    ->directory('complaints')
                    ->disabled(auth()->user()->hasRole('teknisi'))
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
                            ->searchable()
                            ->required()
                            ->options(User::role('teknisi')->pluck('name', 'id')->toArray()),
                        Select::make('status')
                            ->label('Status')
                            ->disabled(auth()->user()->hasRole('koordinator'))
                            ->options([
                                'accept' => 'Accept',
                                'denied' => 'Denied',
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



                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Complaint')
                    ->date('d M Y')
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('complaint')
                    ->label('Complaint')
                    ->searchable(isIndividual: true)
                    ->sortable()
                    ->limit(50)
                    ->wrap(),
                Tables\Columns\ImageColumn::make('photo1')
                    ->label('Photo')
                    ->disk('public')
                    ->circular(),

                Tables\Columns\TextColumn::make('user.name')
                    ->label('User Complaint')
                    ->searchable(isIndividual: true)
                    ->sortable(),
                Tables\Columns\TextColumn::make('koor.name')
                    ->label('Koordinator')
                    ->default('-')
                    ->color('black')
                    ->searchable(isIndividual: true)
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->sortable()
                    ->searchable(isIndividual: true)
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'accept' => 'primary',
                        'finish' => 'success',
                        'completed' => 'success',
                        'request' => 'gray',
                        'pending' => 'warning',
                        'proses' => 'info',
                        'deny' => 'danger',
                        're-schedule' => 'warning',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('tanggal_eksekusi')
                    ->date()
                    ->sortable()
                    ->searchable(isIndividual: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make()
                    ->hidden(!auth()->user()->hasRole('super_admin')),
                SelectFilter::make('tower_id')
                    ->hidden(!auth()->user()->hasRole('super_admin'))
                    ->label('Rusun - Tower')
                    ->options(function () {
                        return \App\Models\Tower::with('rusun')
                            ->get()
                            ->mapWithKeys(function ($tower) {
                                $rusunName = $tower->rusun->name ?? 'Tanpa Rusun';
                                $towerName = $tower->name;
                                return [$tower->id => "{$rusunName} - {$towerName}"];
                            })
                            ->toArray();
                    })
                    ->searchable()
                    ->preload(),

            ])
            ->actions([
                Tables\Actions\Action::make('Update Teknisi')
                    ->label('Update')
                    ->button()

                    ->hidden(function (?Complaint $record) {
                         if (!auth()->user()->hasRole('teknisi')) {
                            return true;
                        }
                        
                        $isAssigned = $record->TeknisiOnComplaint()
                            ->where('teknisi_id', auth()->user()->id)
                            ->exists();

                        if (!$isAssigned) {
                            return true;
                        }

                        return in_array($record->status, ["finish", "completed", "request", "denied"]);
                    })
                    ->modalHeading('Confirmasi Teknisi')
                    ->modalSubheading('Update informasi kamu.')
                    ->modalButton('Selesai')
                    ->form([

                        Forms\Components\TextInput::make('Unit')
                            ->disabled()
                            ->default(fn(?Complaint $record) =>  $record?->user->lantai->name . ', Unit ' . $record?->user->unit->name),
                        Forms\Components\DatePicker::make('tanggal_eksekusi')
                            ->disabled()
                            ->default(fn(?Complaint $record) => $record?->tanggal_eksekusi),
                        Forms\Components\Textarea::make('complaint')
                            ->disabled()
                            ->default(fn(?Complaint $record) => $record?->complaint),
                        Forms\Components\FileUpload::make('photo1')
                            ->image()
                            ->label('Bukti Complaint')
                            ->disabled()
                            ->default(fn(?Complaint $record) => $record?->photo1)
                            ->disk('public')
                            ->directory('complaint'),
                        Forms\Components\Select::make('status')
                            ->required()
                            ->disabled(fn(?Complaint $record) => $record->status == 'accept')
                            ->options([
                                'accept' => 'Diterima',
                                'denied' => 'Ditolak',
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
                            ->hidden(fn(?Complaint $record) => $record->status == 'proses')
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

                        if ($record->status == 'proses') {
                            TeknisiOnComplaint::where('complaint_id', $record->id)->where('teknisi_id', auth()->user()->id)
                                ->update([
                                    'status' => $data['status']
                                ]);
                        }
                        if ($record->status == 'accept') {
                            TeknisiOnComplaint::where('complaint_id', $record->id)->where('teknisi_id', auth()->user()->id)
                                ->update([
                                    'image' => $data['image']
                                ]);
                        }


                        $totalTeknisi = TeknisiOnComplaint::where('complaint_id', '=', $record->id)->count();
                        $totalTeknisiAccept = TeknisiOnComplaint::where('complaint_id', '=', $record->id)->where('status', '=', 'accept')->count();
                        $totalImageUpload = TeknisiOnComplaint::where('complaint_id', '=', $record->id)->where('image', '!=', '')->count();


                        if ($record->status == 'proses' && $totalTeknisi == $totalTeknisiAccept) {
                            $record->update([
                                'status' => 'accept'
                            ]);
                        }
                        if ($record->status == 'accept' && $totalTeknisi == $totalImageUpload) {
                            $record->update([
                                'status' => 'finish',
                                'photo3' => $data['image']
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
                    ->hidden(function (?Complaint $record) {
                        if (!auth()->check()) return true;

                        return (
                            auth()->id() !== optional($record)->user_id ||
                            in_array($record->status, ['completed', 'request', 'proses', 'pending'])
                        );
                    })
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
                            'status' => 'done'

                        ]);
                    }),

                Tables\Actions\EditAction::make()
                    ->label('Update')
                    ->button()

                    ->hidden(function (?Complaint $record) {

                        if (!auth()->user()->hasRole('koordinator')) {
                            return true;
                        } elseif ($record?->status == 'completed') {
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListComplaints::route('/'),



        ];
    }

    public static function getEloquentQuery(): Builder
    {

        $query = parent::getEloquentQuery();


        $query->withoutGlobalScopes([SoftDeletingScope::class]);


        if (auth()->user()->hasRole('user')) {
            $query->where('user_id', auth()->id());
        }


        if (auth()->user()->hasRole('teknisi')) {
            $query->leftJoin('teknisi_on_complaints', 'complaints.id', '=', 'teknisi_on_complaints.complaint_id')->where('teknisi_on_complaints.teknisi_id', '=', auth()->user()->id)
                ->select('complaints.*');
        }

        if (auth()->user()->hasRole('koordinator')) {
            $rusunId = auth()->user()->rusun_id;
            $towerIds = \App\Models\Tower::where('rusun_id', $rusunId)->pluck('id')->toArray();
            
            $query->whereIn('complaints.tower_id', $towerIds);
        }


        return $query->latest('created_at');
    }
}
