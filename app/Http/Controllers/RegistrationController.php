<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration ;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }
    public function store(Request $request)
    {
        $this->validate ($request , [ 'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8']);
        $user = new Registration ;
        $user->fname=$request->name ;
        $user->lname=$request->lname ;
        $user->email=$request->email;
        $user->birth=$request->dob;
        $user->age=$request->age;
        $user->sex=$request->sex;
        $user->bloodGroup=$request->bldgroup;
        $user->password=$request->password;



        $user->save();
        return view('registration.create');
    }
}