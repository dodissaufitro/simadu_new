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
    protected static ?string $title = 'Profil Saya';
    protected static ?string $navigationLabel = 'Profil';
    protected static bool $shouldRegisterNavigation = false;

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
                Section::make('Informasi Pengguna')->schema([
                    ImageEntry::make('photo')
                        ->label('Foto Profil')
                        ->defaultImageUrl(url('https://ui-avatars.com/api/?name=' . urlencode($this->record->name)))
                        ->hiddenLabel(),
                    TextEntry::make('name')->label('Nama')->default($this->record->name??'-'),
                    TextEntry::make('email')->label('Email'),
                    TextEntry::make('phone')->label('No. Telepon')->default($this->record->phone??'-'),
                    TextEntry::make('address')->label('Alamat')->default($this->record->address??'-'),
                    TextEntry::make('rusun.name')->label('Rusun')
                        ->default($this->record->rusun->name??'-')
                        ->hidden(fn ($record) => $record->hasRole('')),
                ])->columns(2),
            ]);
    }
}

