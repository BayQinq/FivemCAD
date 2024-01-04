<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BqCharacter;
use Auth;
class PagesController extends Controller
{
   public static function settings()
   {
    return view('panel.layouts.auth.settings');
   }

   public static function profile()
   {
   $characters = BqCharacter::where('user_id', Auth::user()->id)->first();
   $rank = 'Officer II';
      if($characters)
      {
         return view('panel.layouts.auth.profile', ['ch' => $characters, 'rank' => $rank ]);
      }
      else
      {
         return redirect()->route('dashboard');
      }
  
   }

   
}
