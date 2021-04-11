<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;


class EmailController extends Controller
{
    public function index(){
        $email = Email::all();
        return view('contact.index')->with(['email' => $email]);
    }
    
    public function store(Request $request){
        
        if($request->hasFile('photo')){
            $filename = $request->photo->getClientOriginalName();
            $request->photo->storeAs('images', $filename, 'public');
            Email::create([
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'photo' => $filename
            ]);
        }
        
        return back();
    }

}


