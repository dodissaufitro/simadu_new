<?php

namespace App\Providers\Filament;

use App\Filament\Widgets\CountComplaintReport;
use Filament\Facades\Filament;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\UserMenuItem;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->brandLogo(asset('logo/logo_simadu.png'))
            // ->brandLogo
            ->brandLogoHeight('80px')
            ->login()
            ->registration()
            ->colors([
                'primary' => Color::Green,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                CountComplaintReport::class,
            ])
            // ->homeUrl(fn () => $this->getHomeUrl())
            ->userMenuItems([
                UserMenuItem::make()
                    ->label('Profil Saya')
                    ->url(fn () => route('filament.admin.pages.profile'))
                    ->icon('heroicon-o-user'),
            ])
            ->navigationGroups([
                'Main',
                'Rusun',
                'Filament Shield',
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->plugins([
                \BezhanSalleh\FilamentShield\FilamentShieldPlugin::make(),
            ])
            ->spa()
            ->authMiddleware([
                Authenticate::class,
            ]);
    }

//     public function getHomeUrl(): string
// {
//     $user = Auth::user();

//     if ($user && !$user->hasRole('super_admin')) {
//         return route('filament.admin.pages.profile'); // Ganti 'profile' dengan route yang sesuai halaman profile kamu
//     }

//     return Filament::getUrl(); // Default ke dashboard
// }
}
