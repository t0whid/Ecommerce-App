<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Session\Session;

class UserController extends Controller
{
    //
    function login(Request $request) {
        $user = User::where([ 'email'=> $request->email])->first();
        if(!$user || !Hash::check($request->password, $user->password)) {
            return "!Match";
        } else {
           $request->session()->put('user', $user);
            return redirect('/');
        }
    }
    /* function back() {
        return redirect()->back();
    } */
   /*  function logout() {
        //Session::flush();
        
        Auth::logout();

        return redirect('login');
    } */
}
