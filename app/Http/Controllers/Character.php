<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BqCharacter;
use Auth;
class Character extends Controller
{
    public function __construct()
    {
        $this->middleware('check.character');
    }

    public function main()
    {
        $characters = BqCharacter::where('user_id', Auth::user()->id)->count();
        if($characters == 1)
        {
            return redirect()->route('dashboard');
        }
        else
        {
            return view('panel.layouts.forms.newCharacter');
        }
       
    }

     // Store Form data in database
     public function CharacterForm(Request $request) {
        // Form validation
        $characters = BqCharacter::where('user_id', Auth::user()->id)->count();
        if($characters == 0)
        {
        $this->validate($request, [
            'ch_first_name' => 'required|string|min:3|max:20|regex:/^[A-Z][a-zA-Z\s]+$/',
            'ch_last_name' => 'required|string|min:3|max:20|regex:/^[A-Z][a-zA-Z\s]+$/',
            'ch_birth_date' => 'required|date_format:Y-m-d',
        ],[
            'ch_first_name.required' => 'Karakter adı alanı zorunludur.',
            'ch_first_name.string' => 'Karakter adı metin formatında olmalıdır.',
            'ch_first_name.min' => 'Karakter adı en az :min karakter uzunluğunda olmalıdır.',
            'ch_first_name.max' => 'Karakter adı en fazla :max karakter uzunluğunda olmalıdır.',
            'ch_first_name.regex' => 'Karakter adı büyük harfle başlamalı ve sadece harflerden oluşmalıdır.',
        
            'ch_last_name.required' => 'Karakter soyadı alanı zorunludur.',
            'ch_last_name.string' => 'Karakter soyadı metin formatında olmalıdır.',
            'ch_last_name.min' => 'Karakter soyadı en az :min karakter uzunluğunda olmalıdır.',
            'ch_last_name.max' => 'Karakter soyadı en fazla :max karakter uzunluğunda olmalıdır.',
            'ch_last_name.regex' => 'Karakter soyadı büyük harfle başlamalı ve sadece harflerden oluşmalıdır.',
        
            'ch_birth_date.required' => 'Doğum tarihi alanı zorunludur.',
            'ch_birth_date.date_format' => 'Doğum tarihi formatı gg.aa.yyyy olmalıdır.',
        ]);


        // Transformations
        $formData = $request->all();
        $formData['ch_birth_date'] = strtotime($request->input('ch_birth_date'));
        $formData['date_added'] = time();
        // Store data in database with user_id
        $formData['user_id'] = Auth::user()->id;
        BqCharacter::create($formData);
            return redirect()->route('dashboard')->with('success', 'Başarılı bir şekilde karakter oluşturuldu.');
    }
        else
        {
            return back()->with('danger', 'Lütfen formu eksiksiz doldurunuz.');
        }
    }
}