<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $r){
        //return DB::select('select email from users where email=?',[$r->email]);

        $user= User::where(['email'=>$r->email])->first();

        if(!$user || Hash::check($r->pass, $user->password)){
            return "username or password is not matched";
        }else{

            $r->session()->put('user',$user);
            return redirect('/');
        }
    }
}
