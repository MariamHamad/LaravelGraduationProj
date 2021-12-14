<?php

namespace App\Http\Controllers;
use App\Registration ;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function CheckLogin(Request $request){
        $this->validate($request,['email' =>'required|email', 
        'password'=> 'required|min:8']);
    
     
	 $user = Registration::where('email' , $request->email)
                ->where('password' ,$request->password)
                ->exists();
       
        if($user){
           
            return view('index');
        }
    
	
	
return view('registration.create');        
    
    
    }
}
