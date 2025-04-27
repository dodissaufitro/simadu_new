<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ComplaintResource\Pages;
use App\Models\Complaint;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
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
                // dd(auth()->user()->hasRole('super_admin')),
                Forms\Components\Select::make('rusun_id')
                    ->relationship('rusun', 'name')
                    ->searchable() // mencari data
                    ->preload() // mengambil data 5-10 data
                    ->required(),

                    Forms\Components\Select::make('user_verified')
                    ->label('Verified by')
                    ->options(\App\Models\User::pluck('name', 'id')) // tampilkan nama, tapi value tetap ID
                    ->default(Auth::id())
                    ->disabled(auth()->user()->hasRole('user')) // jika user biasa, tidak bisa diubah
                    ->hidden(auth()->user()->hasRole('user')),
                    Forms\Components\Select::make('user_id')
                    ->label('User')
                    ->options(\App\Models\User::pluck('name', 'id')) // tampilkan nama, tapi value tetap ID
                    ->default(Auth::id())
                    ->disabled(auth()->user()->hasRole('user')) // jika user biasa, tidak bisa diubah
                    ->hidden(auth()->user()->hasRole('user')),
                Forms\Components\Select::make('status')
                    ->options([
                        'request' => 'request',
                        'accept' => 'accept',
                        'finish' => 'finish',
                        're-schedule' => 're-schedule',
                        'deny' => 'deny',
                    ])
                    ->default('request')
                    ->hidden(auth()->user()->hasRole('user')),
                Forms\Components\DatePicker::make('tanggal_eksekusi')
                    ->required()
                    ->default(now())
                    ->minDate(now())
                    ->placeholder('Tanggal Eksekusi'),
                Forms\Components\Textarea::make('complaint')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('photo1')
                    ->required()
                    ->image()
                    ->disk('public')
                    ->directory('complaints')
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
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('rusun_id')
                    ->label('Rusun')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user_verified')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('tanggal_eksekusi')
                    ->date()
                    ->sortable(),
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
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
