<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BqInvites;
use App\Models\BqDepartments;
use App\Models\BqCharacter;
use Auth;

class DepartmentController extends Controller
{
    // Store Form data in database
    public function join_station(Request $request) {
        // Form validation
        $characters = BqInvites::where('user_id', Auth::user()->id)->where('id', $request->input('station_id'))->count();
        if($characters == 1)
        {
        $this->validate($request, [
            'station_id' => 'required|numeric|min:1'
        ],
        [
            'station_id.required' => 'Station ID alanı zorunludur.',
            'station_id.numeric' => 'Station ID bir sayı olmalıdır.',
            'station_id.min' => 'Station ID en az bir karakter uzunluğunda olmalıdır.',    
        ]);
        
        return redirect()->route('dashboard')->with('success', 'Departman başarıyla katılım sağlandı.'.$request->input('station_id'));
        }
        else
        {
            return redirect()->route('dashboard');
        }
    }

    public static function new_station()
    {   
        if(Auth::user()->department_id == 0)
        {
            $ch = BqCharacter::where('user_id', Auth::user()->id)->count();
            if($ch > 0)
            {
                return view('panel.layouts.forms.newDepartment');

            }
            else
            {
                return route('dashboard');
            }

            
        }
        else
        {
            return view('panel.layouts.dashboard');
        }
       
    }


    public function join_station_post(Request $request) {
        // Form validation
        $characters = BqInvites::where('user_id', Auth::user()->id)->where('id', $request->input('station_id'))->count();
        if($characters == 1)
        {
        $this->validate($request, [
            'name' => 'required|min:5|max:40|regex:/^[a-zA-Z]+$/',
            'slug' => 'required|min:2|max:7|alpha_uppercase|without_spaces',
            'bonus_payment' => 'required|numeric|min:0|max:1000',
            'require' => 'required|accepted',
        ],
        [
            'name.required' => 'Ad alanı zorunludur.',
            'name.min' => 'Ad en az 5 karakter olmalıdır.',
            'name.max' => 'Ad en fazla 40 karakter olmalıdır.',
            'name.regex' => 'Ad sadece büyük ve küçük harflerden oluşmalıdır.',

            'slug.required' => 'Slug alanı zorunludur.',
            'slug.min' => 'Slug en az 2 karakter olmalıdır.',
            'slug.max' => 'Slug en fazla 7 karakter olmalıdır.',
            'slug.alpha_uppercase' => 'Slug sadece büyük harflerden oluşmalıdır.',
            'slug.without_spaces' => 'Slug alanında boşluk kullanılamaz.',

            'bonus_payment.required' => 'Bonus ödemesi zorunludur.',
            'bonus_payment.numeric' => 'Bonus ödemesi sayı olmalıdır.',
            'bonus_payment.min' => 'Bonus ödemesi en az 0 olmalıdır.',
            'bonus_payment.max' => 'Bonus ödemesi en fazla 1000 olmalıdır.',

            'require.required' => 'Şartları kabul etmelisiniz.',
            'require.accepted' => 'Şartları kabul etmelisiniz.',
        ]);
        
            return back()->with('success', 'Departman başarıyla katılım sağlandı.'.print_r($request));
        }
        else
        {
            return redirect()->route('dashboard');
        }
    }
}
