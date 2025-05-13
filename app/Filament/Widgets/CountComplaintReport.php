<?php

namespace App\Filament\Widgets;

use App\Models\Complaint;
use App\Models\Penilaian;
use App\Models\Rusun;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

class CountComplaintReport extends BaseWidget
{
    protected function getStats(): array
    {

        if(Auth::user()->hasRole('teknisi')){
            return [
            Stat::make('Complaint Report', Complaint::leftJoin('users', 'complaints.user_id', '=', 'users.id')
            ->leftJoin('towers', 'users.tower_id', '=', 'towers.id')
            ->where('towers.id', auth()->user()->tower_id)->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Complaint Accepted', Complaint::leftJoin('users', 'complaints.user_id', '=', 'users.id')
            ->leftJoin('towers', 'users.tower_id', '=', 'towers.id')
            ->where('towers.id', auth()->user()->tower_id)->where('status','accept')->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Complaint Finish', Complaint::leftJoin('users', 'complaints.user_id', '=', 'users.id')
            ->leftJoin('towers', 'users.tower_id', '=', 'towers.id')
            ->where('towers.id', auth()->user()->tower_id)->where('status','completed')->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Reschedule ME', Complaint::leftJoin('users', 'complaints.user_id', '=', 'users.id')
            ->leftJoin('towers', 'users.tower_id', '=', 'towers.id')
            ->where('towers.id', auth()->user()->tower_id)->where('status','re-schedule')->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Reschedule User', Complaint::leftJoin('users', 'complaints.user_id', '=', 'users.id')
            ->leftJoin('towers', 'users.tower_id', '=', 'towers.id')
            ->where('towers.id', auth()->user()->tower_id)->where('status','reschedule')->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('User', User::where('tower_id',auth()->user()->tower_id)->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Feedback', Penilaian::where('user_verified',auth()->user()->id)->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
        ];
        }
        if(Auth::user()->hasRole('user')){
            return [
            Stat::make('Complaint Report', Complaint::where('user_id',auth()->user()->id)->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Complaint Accepted', Complaint::where('status','accept')->where('user_id',auth()->user()->id)->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Complaint Finish', Complaint::where('status','completed')->where('user_id',auth()->user()->id)->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Feedback', Penilaian::where('user_id',auth()->user()->id)->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
        ];
        }
        if(Auth::user()->hasRole('koordinator')){
            return [
            Stat::make('Complaint Report', Complaint::leftJoin('users', 'complaints.user_id', '=', 'users.id')
            ->leftJoin('towers', 'users.tower_id', '=', 'towers.id')
            ->where('towers.id', auth()->user()->tower_id)->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Complaint Accepted', Complaint::leftJoin('users', 'complaints.user_id', '=', 'users.id')
            ->leftJoin('towers', 'users.tower_id', '=', 'towers.id')
            ->where('towers.id', auth()->user()->tower_id)->where('status','accept')->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Complaint Finish', Complaint::leftJoin('users', 'complaints.user_id', '=', 'users.id')
            ->leftJoin('towers', 'users.tower_id', '=', 'towers.id')
            ->where('towers.id', auth()->user()->tower_id)->where('status','completed')->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Reschedule ME', Complaint::leftJoin('users', 'complaints.user_id', '=', 'users.id')
            ->leftJoin('towers', 'users.tower_id', '=', 'towers.id')
            ->where('towers.id', auth()->user()->tower_id)->where('status','re-schedule')->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Reschedule User', Complaint::leftJoin('users', 'complaints.user_id', '=', 'users.id')
            ->leftJoin('towers', 'users.tower_id', '=', 'towers.id')
            ->where('towers.id', auth()->user()->tower_id)->where('status','reschedule')->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('User', User::where('tower_id',auth()->user()->tower_id)->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Feedback', Penilaian::leftJoin('users', 'complaints.user_id', '=', 'users.id')
            ->leftJoin('towers', 'users.tower_id', '=', 'towers.id')
            ->where('towers.id', auth()->user()->tower_id)->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
        ];
        }
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
