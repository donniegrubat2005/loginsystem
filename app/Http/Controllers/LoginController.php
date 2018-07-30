<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;


class LoginController extends Controller
{
    public function index()

    {
    	return view('login.login_admin');
    }


    public function validate_login(Request $request) 
    {
      
      $this->validate($request, [
       
       'username'     =>   'required',
       'password'     =>   'required'
      ]);

     /* $userdata = array(
        'username'      =>  //$request->get('username'), 
        'password'      =>  $request->get('password')
     );*/

      $userdata = array(
        'username'      =>  $request->input('username'), 
        'password'      =>  $request->input('password')
     );

      //if (Auth::attempt($userdata)) this is for hash code
      if (Auth::attempt($userdata))
      {
          return redirect('login/validate_success');
      }
      else 
      {
        return back()->with('error','Wrong username and password');
      }
    
    }

    public function validate_success()

    {
        return view('dashboard');
    }


    public function logout()

    {
        Auth::logout();
        return redirect('/');
    }

}

