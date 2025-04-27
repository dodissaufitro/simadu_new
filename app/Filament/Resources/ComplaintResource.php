<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ComplaintResource\Pages;
use App\Models\Complaint;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
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



    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                // Textarea::make('Address')
                //     ->label('Address')
                //     ->required()
                //     ->dehydrated(false)
                //     ->default(function (?Complaint $record) {
                //         if (auth()->user()->hasRole('petugas')) {
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

                    Forms\Components\Select::make('user_verified')
                    ->label('Verified by')
                    ->options(\App\Models\User::pluck('name', 'id')) // tampilkan nama, tapi value tetap ID
                    ->default(Auth::id())
                    ->disabled(auth()->user()->hasRole('user')) // jika user biasa, tidak bisa diubah
                    ->hidden(!auth()->user()->hasRole('super_admin')), // hanya tampil kalau bukan user,
                    Forms\Components\Select::make('user_id')
                    ->label('User')
                    ->options(\App\Models\User::pluck('name', 'id')) // tampilkan nama, tapi value tetap ID
                    ->default(Auth::user()->hasRole('petugas') ? Auth::user()->id : null) // jika user biasa, ambil ID user yang login
                    ->hidden(!auth()->user()->hasRole('super_admin')), // hanya tampil kalau bukan user,
                Forms\Components\Select::make('status')
                    ->options([
                        'request' => 'request',
                        'accept' => 'accept',
                        'finish' => 'finish',
                        're-schedule' => 're-schedule',
                        'deny' => 'deny',
                    ])
                    ->default(fn(?Complaint $record) => $record?->status ?? 'request')
                    ->hidden(auth()->user()->hasRole('user')),
                Forms\Components\DatePicker::make('tanggal_eksekusi')
                    ->default(now())
                    ->minDate(now())
                    ->hidden(auth()->user()->hasRole('user'))
                    ->placeholder('Tanggal Eksekusi'),
                Forms\Components\Textarea::make('complaint')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('photo1')
                    ->required()
                    ->image()
                    ->disk('public')
                    ->directory('complaints')
                    ->getUploadedFileNameForStorageUsing(function ($state) {
                        return str_replace('storage/', '', $state); // buang /storage/
                    })
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('photo2')
                    ->image()
                    ->disk('public')
                    ->directory('complaints')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('photo3')
                    ->image()
                    ->disk('public')
                    ->directory('complaints')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('keterangan')
                    ->hidden(auth()->user()->hasRole('user'))
                    ->columnSpanFull(),
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
                Tables\Columns\TextColumn::make('user_verified')
                    ->label('Verified by')
                    ->formatStateUsing(function ($state, $record) {
                        return $record->user_verified ? $record->user_verified : 'Not Verified';
                    })
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
                    'request' => 'gray',
                    're-schedule' => 'warning',
                    'deny' => 'danger',
                }),
                Tables\Columns\TextColumn::make('tanggal_eksekusi')
                    ->date()
                    ->sortable()
                    ->searchable(isIndividual:true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->hidden(!auth()->user()->hasRole('super_admin'))
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->hidden(!auth()->user()->hasRole('super_admin'))
                    ->toggleable(isToggledHiddenByDefault: false),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make()
                ->hidden(!auth()->user()->hasRole('super_admin')),
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                ]),

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
    if (auth()->user()->hasRole('Petugas')) {
        $query->where('user_id', auth()->id())->orWhere('status','request'); // Hanya data yang dimiliki user yang login
    }

    return $query->latest('created_at'); // Mengurutkan berdasarkan tanggal terbaru
}

}
