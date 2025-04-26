<?php

namespace App\Filament\Widgets;

use App\Models\Complaint;
use App\Models\Penilaian;
use App\Models\Rusun;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CountComplaintReport extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Complaint Report', Complaint::where('status','request')->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Complaint Accepted', Complaint::where('status','accept')->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Complaint Finish', Complaint::where('status','finish')->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Reschedule ME', Complaint::where('status','request')->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Reschedule User', Complaint::where('status','request')->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('User', User::count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Feedback', Penilaian::count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Rusun', Rusun::distinct('name')->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
        ];
    }
}
