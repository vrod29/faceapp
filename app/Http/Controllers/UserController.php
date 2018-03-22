<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function userSettings(){
        $userSettings = User::find(Auth::id());
        $data = [
            'userSettings' => $userSettings
        ];
        return view('settings')->with($data);
    }

    public function updateSettings(Request $request){
        $userSettings = User::find(Auth::id());
        $userSettings->email= $request->email;
        $userSettings->name= $request->name;
        $userSettings->save();
        return redirect('settings');
    }
}
