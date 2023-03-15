<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  

    public function signinPage(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where([
            ['email',$request['email']],
            ['password',$request['password']]
        ])->first();

        if($user){
            Auth::login($user);

            return redirect()->route('admin.index');
        }
    }

}
