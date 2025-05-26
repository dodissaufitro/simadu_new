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
            Stat::make('Complaint Report', Complaint::leftJoin('teknisioncomplaints', 'complaints.id', '=', 'teknisioncomplaints.complaint_id')
            ->where('teknisioncomplaints.user_id', auth()->user()->tower_id)->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Complaint Accepted', Complaint::leftJoin('teknisioncomplaints', 'complaints.id', '=', 'teknisioncomplaints.complaint_id')
            ->where('teknisioncomplaints.user_id', auth()->user()->tower_id)
            ->where('complaints.status','accept')->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Complaint Finish', Complaint::leftJoin('teknisioncomplaints', 'complaints.id', '=', 'teknisioncomplaints.complaint_id')
            ->where('teknisioncomplaints.user_id', auth()->user()->tower_id)
            ->where('complaints.status','completed')->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Pending', Complaint::leftJoin('teknisioncomplaints', 'complaints.id', '=', 'teknisioncomplaints.complaint_id')
            ->where('teknisioncomplaints.user_id', auth()->user()->tower_id)
            ->where('complaints.status','pending')->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('User', User::where('tower_id',auth()->user()->tower_id)->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Feedback', Penilaian::where('koor_id',auth()->user()->id)->count())
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
            Stat::make('Complaint Completed', Complaint::where('status','pending')->where('user_id',auth()->user()->id)->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Complaint Completed', Complaint::where('status','accept')->where('user_id',auth()->user()->id)->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Complaint Completed', Complaint::where('status','completed')->where('user_id',auth()->user()->id)->count())
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
            Stat::make('Complaint Report', Complaint::where('tower_id', auth()->user()->tower_id)->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Complaint Accepted', Complaint::where('tower_id', auth()->user()->tower_id)->where('status','accept')->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Complaint Finish', Complaint::where('tower_id', auth()->user()->tower_id)->where('status','completed')->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Pending', Complaint::where('tower_id', auth()->user()->tower_id)->where('status','pending')->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Denied', Complaint::where('tower_id', auth()->user()->tower_id)->where('status','denied')->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('User', User::where('tower_id',auth()->user()->tower_id)->count())
                ->extraAttributes(['class' => 'text-center '])
                ->icon('heroicon-o-user')
                ->color('red'),
            Stat::make('Feedback', Penilaian::where('tower_id', auth()->user()->tower_id)->count())
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
