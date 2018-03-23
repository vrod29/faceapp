<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserImage;
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

    // public function uploadImage()
    // {
    //   $newUpload = new UserImage;
    //   $newUpload->user_id = Auth::id();
    //   $newUpload->image_url = $request->image_url;
    //   $newUpload->json = $request->json;
    //   $newUpload->save();
    // }

    public function fillDirectory(){
        $userSettings = User::find(Auth::id());
        $userImages = UserImage::where('user_id', '=', Auth::id())->get();
        $data = [
            'userSettings' => $userSettings,
            'userImages' => $userImages
        ];
        return view('directory')->with($data);
    }


}
