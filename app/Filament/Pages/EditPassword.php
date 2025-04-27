<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class EditPassword extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-key';
    protected static ?string $navigationLabel = 'Edit Password';
    protected static string $view = 'filament.pages.edit-password';
    protected static ?string $title = 'Edit Password';
    protected static bool $shouldRegisterNavigation = false;

    public $current_password;
    public $password;
    public $password_confirmation;

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('current_password')
                ->label('Current Password')
                ->password()
                ->required(),

            Forms\Components\TextInput::make('password')
                ->label('New Password')
                ->password()
                ->required()
                ->confirmed(),

            Forms\Components\TextInput::make('password_confirmation')
                ->label('Confirm New Password')
                ->password()
                ->required(),
        ];
    }

    public function save()
    {
        $user = Auth::user();

        if (! Hash::check($this->current_password, $user->password)) {
            throw ValidationException::withMessages([
                'current_password' => 'The current password is incorrect.',
            ]);
        }

        $user->update([
            'password' => bcrypt($this->password),
        ]);

        Auth::attempt([
            'email' => $user->email,
            'password' => $this->password,
        ]);
        return redirect()->route('filament.admin.pages.profile');
    }
}
