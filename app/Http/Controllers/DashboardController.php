<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\BqCharacter;
use App\Models\BqDepartments;
use App\Models\BqInvites;

class DashboardController extends Controller
{

    public static function get_invites()
    {
$invites = BqInvites::join('bq_departments', 'bq_invites.station_id', '=', 'bq_departments.id')
->select('bq_departments.name','bq_invites.station_id','bq_invites.date_added as DateAdded', 'bq_invites.id as ID')

    ->where('bq_invites.user_id', Auth::user()->id)
    ->get();

        if($invites)
        {
            return $invites;
        }
        else
        {
            return $invites=[];
        }
    }

    public static function main()
    {   
        if(Auth::user()->department_id == 0)
        {
            $ch = BqCharacter::where('user_id', Auth::user()->id)->first();
            if($ch)
            {
                return view('panel.layouts.nondepartment', ['username'=> $ch->ch_last_name, 'invites'=>self::get_invites()]);

            }
            else
            {
                return view('panel.layouts.nondepartment', ['username'=> Auth::user()->username, 'invites'=>self::get_invites()]);
            }

            
        }
        else
        {
            return view('panel.layouts.dashboard');
        }
       
    }

}
