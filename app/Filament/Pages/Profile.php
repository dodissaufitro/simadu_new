<?php

namespace App\Filament\Pages;

use App\Models\User;
use Filament\Pages\Page;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Infolist;
use Illuminate\Support\Facades\Auth;

class Profile extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static string $view = 'filament.pages.profile';
    protected static ?string $title = 'Profile';
    // protected static bool $shouldRegisterNavigation = false;

    protected static ?string $navigationLabel = 'Profile';
    protected static ?string $label = 'Profile';

    public User $record;

    public function mount(): void
    {
        $this->record = Auth::user();
    }

    public function getInfolist(string $name): ?Infolist
    {
        return Infolist::make()
            ->record($this->record)
            ->schema([
                Section::make('Profile Detail')->schema([
                    ImageEntry::make('image')
                        ->label('Foto Profil')
                        ->hiddenLabel(),
                    TextEntry::make('name')->label('Nama')->default($this->record->name??'-'),
                    TextEntry::make('email')->label('Email'),
                    TextEntry::make('phone')->label('No. Telepon')->default($this->record->phone??'-'),
                    TextEntry::make('unit.lantai.tower.rusun.name')->label('Rusun')
                        ->default($this->record->unit->lantai->tower->rusun->name??'-'),
                    TextEntry::make('unit.lantai.tower.name')->label('Tower')
                        ->default($this->record->unit->lantai->tower->name??'-'),
                    TextEntry::make('unit.lantai.name')->label('Lantai')
                        ->default($this->record->unit->lantai->name??'-'),
                    TextEntry::make('unit.name')->label('Unit')
                        ->default($this->record->unit->name??'-'),
                    ])->columns(2),
            ]);
    }
}

