<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\lantai;
use App\Models\Tower;
use App\Models\Unit;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationLabel = 'User';

    protected static ?string $title = 'User';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('name')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                Section::make('Unit')
                    ->description('Unit Yang Dihuni')
                    ->columns(2)
                    ->schema([
                        Forms\Components\Select::make('rusun_id')
                            ->options(
                                fn(Get $get)=> \App\Models\Rusun::query()->pluck('name','id')
                            )
                            ->default(fn(?User $record) => $record?->unit?->lantai?->tower?->rusun?->id)
                            // ->dehydrated(false)
                            ->searchable()
                            ->preload()
                            ->live()
                            ->afterStateUpdated(function(Set $set){
                                $set('tower_id',null);
                                $set('lantai_id',null);
                                $set('unit_id',null);
                            })

                            ->label('Rusun')
                            ->required(),
                        Forms\Components\Select::make('tower_id')
                            // ->relationship('tower', 'name')
                            ->options(
                                fn(Get $get)=> Tower::query()->where('rusun_id',$get('rusun_id'))->pluck('name','id')
                            )
                            ->default(fn(?User $record) => $record?->unit?->lantai?->tower->id)
                            // ->dehydrated(false)
                            ->searchable()
                            ->preload()
                            ->live()
                            ->required()
                            ->afterStateUpdated(function(Set $set){
                                $set('lantai_id',null);
                                $set('unit_id',null);
                            })
                            ->label('Tower'),
                        Forms\Components\Select::make('lantai_id')
                            // ->relationship('lantai', 'name')
                            ->options(
                                fn(Get $get)=> lantai::query()->where('tower_id',$get('tower_id'))->pluck('name','id')
                            )
                            ->default(fn(?User $record) => $record?->unit?->lantai?->id)
                            // ->dehydrated(false)
                            ->searchable()
                            ->preload()
                            ->live()
                            ->afterStateUpdated(function(Set $set){
                                $set('unit_id',null);
                            })
                            ->label('Lantai'),
                        Forms\Components\Select::make('unit_id')
                            // ->relationship('unit', 'name')
                            ->options(
                                fn(Get $get)=> Unit::query()->where('lantai_id',$get('lantai_id'))->pluck('name','id')
                            )
                            // ->dehydrated(false)
                            ->searchable()
                            ->preload()
                            ->live()
                            ->label('Unit'),
                    ]),
                // Forms\Components\TextInput::make('rusun_id')
                //     ->relationship('rusun', 'name')
                //     ->required()
                //     ->dehydrated(false),
                // Forms\Components\TextInput::make('unit_id')
                //     ->relationship('unit', 'name')
                //     ->required(),
                FileUpload::make('image')
                ->image()
                ->label('Foto Profil')
                ->required()
                ->columnSpanFull(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->required(),
                Forms\Components\Select::make('roles')
                    ->relationship('roles', 'name')
                    ->required()
                    ->default('user')

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('No')
                    ->label('No')
                    ->rowIndex(),
                Tables\Columns\TextColumn::make('rusun.name')
                    ->label('Rusun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('roles.name')
                    ->label('Role')
                    ->badge()
                    ->searchable(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
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
