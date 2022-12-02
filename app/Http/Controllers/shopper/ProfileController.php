<?php

namespace App\Http\Controllers\shopper;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //お客様用のプロフィール編集画面
    public function shopper_profile_display(){
        $id = Auth::id();
        $user = DB::table('users')->find($id);
        return view('haiki_shopper.shopper_profile_display',['user'=>$user]);
    } 

    public function shopper_profile_edit(Request $request){
    $request->validate([
    'name'=>['required','max:255'],
    'email'=>['required','string', 'email:strict,dns,spoof', 'max:255', 'unique:users'],
    'password'=>['required','min:8','max:255'],
    'password_confirmation'=>['required','same:password'],
]);
        $id = Auth::id();
        $user = User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password= Hash::make($request->password);
        $user->save();
        return redirect('haiki/shopper_mypage');
}

}
