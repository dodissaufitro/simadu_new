<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenilaianResource\Pages;
use App\Filament\Resources\PenilaianResource\RelationManagers;
use App\Models\Penilaian;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenilaianResource extends Resource
{
    protected static ?string $model = Penilaian::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';
    protected static ?string $navigationLabel = 'Feedback';

    protected static ?string $title = 'Feedback';
    protected static ?string $label = 'Feedback';
    protected static ?string $pluralLabel = 'Feedback';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('complaint_id')
                    ->relationship('complaint', 'complaint')
                    ->required()
                    ->preload()
                    ->searchable() // mencari data
                    ->disabled(auth()->user()->hasRole('user')) // jika user biasa, tidak bisa diubah
                    ->hidden(auth()->user()->hasRole('user')),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required()
                    ->preload()
                    ->label('User Complaint')
                    ->searchable() // mencari data
                    ->default(auth()->user()->id)
                    ->disabled(auth()->user()->hasRole('user')) // jika user biasa, tidak bisa diubah
                    ->hidden(auth()->user()->hasRole('user')),
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
            // ->afterValidate(function ($state, callable $set, callable $get) {
            //     $exists = \App\Models\User::where('unit_id', $get('unit_id'))
            //         ->where('role', $get('role'))
            //         ->exists();

            //     if ($exists) {
            //         throw \Filament\Forms\Components\ComponentException::withMessages([
            //             'unit_id' => 'Kombinasi Unit dan Role sudah ada.',
            //             'role' => 'Kombinasi Unit dan Role sudah ada.',
            //         ]);
            //     }
            // })
            ;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('No')
                    ->label('No')
                    ->rowIndex(),
                Tables\Columns\TextColumn::make('complaint.complaint')
                    ->sortable()
                    ->limit(50,'...')
                    ->searchable(isIndividual:true),
                Tables\Columns\TextColumn::make('user.name')
                    ->sortable()
                    ->searchable(isIndividual:true),
                Tables\Columns\TextColumn::make('rating_layanan')
                ->formatStateUsing(function ($state) {
                    return match ($state) {
                        1 => '⭐',
                        2 => '⭐⭐',
                        3 => '⭐⭐⭐⭐',
                        4 => '⭐⭐⭐⭐⭐',
                        5 => '⭐⭐⭐⭐⭐',
                        default => ' ',
                    };
                }),

                Tables\Columns\TextColumn::make('rating_kualitas')
                ->formatStateUsing(function ($state) {
                    return match ($state) {
                        1 => '⭐',
                        2 => '⭐⭐',
                        3 => '⭐⭐⭐⭐',
                        4 => '⭐⭐⭐⭐⭐',
                        5 => '⭐⭐⭐⭐⭐',
                        default => ' ',
                    };
                }),

                Tables\Columns\TextColumn::make('rating_kecepatan')
                ->formatStateUsing(function ($state) {
                    return match ($state) {
                        1 => '⭐',
                        2 => '⭐⭐',
                        3 => '⭐⭐⭐⭐',
                        4 => '⭐⭐⭐⭐⭐',
                        5 => '⭐⭐⭐⭐⭐',
                        default => ' ',
                    };
                }),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make()->hidden(!auth()->user()->hasRole('super_admin')), // jika bukan super admin
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make()->hidden(!auth()->user()->hasRole('super_admin')),// jika bukan super admin
                    Tables\Actions\DeleteAction::make()->hidden(!auth()->user()->hasRole('super_admin')), // jika bukan super admin
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->hidden(!auth()->user()->hasRole('super_admin')), // jika bukan super admin
                    Tables\Actions\ForceDeleteBulkAction::make()->hidden(!auth()->user()->hasRole('super_admin')), // jika bukan super admin
                    Tables\Actions\RestoreBulkAction::make()->hidden(!auth()->user()->hasRole('super_admin')), // jika bukan super admin
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
            'index' => Pages\ListPenilaians::route('/'),
            'create' => Pages\CreatePenilaian::route('/create'),
            'view' => Pages\ViewPenilaian::route('/{record}'),
            'edit' => Pages\EditPenilaian::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        // Mulai dengan query eloquent dasar
        $query = parent::getEloquentQuery();

        // Hilangkan global scope SoftDeletingScope
        $query->withoutGlobalScopes([SoftDeletingScope::class]);

        // Filter berdasarkan user_id, kecuali jika user adalah admin
        if (!auth()->user()->hasRole('super_admin')) {
            $query->where('user_id', auth()->user()->id); // Hanya data yang dimiliki user yang login
        }

        return $query; // Mengurutkan berdasarkan tanggal terbaru

    }
}
