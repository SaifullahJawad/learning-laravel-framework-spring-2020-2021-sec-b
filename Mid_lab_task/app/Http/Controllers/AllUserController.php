<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\All_User;

class AllUserController extends Controller
{
    //

    public function verify(Request $req)
    {
        $user = All_User::where('email', $req->input('email'))->first();
        if($user->password == $req->input('password'))
        {
            $req->session()->put('user_name', $user->user_name);
            return redirect('dashboard');
        }
        else{
            $req->session()->flash('errorMessage', 'Invalid email or password');
            return redirect('/');
        }
    }
}
