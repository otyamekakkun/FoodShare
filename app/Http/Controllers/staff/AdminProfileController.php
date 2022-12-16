<?php

namespace App\Http\Controllers\staff;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
//staffのprofileの画面(コンビニ情報を登録し直す)コントローラ
public function staff_profile_display(){
    $id = Auth::guard('admin')->id();
    $admin = DB::table('admins')->find($id);
    return view('haiki_staff.staff_profile_display',['admin'=>$admin]);
} //...................画面表示するもの

public function staff_profile_edit(Request $request)
{
    //データベースに登録するための処理
$request->validate([
'name'=>['required','max:255'],
'email'=>['required','string', 'email:strict,dns', 'max:255'],
'password'=>['required','min:8','max:255'],
'password_confirmation'=>['required','min:8','same:password'],
'convinience_name'=>'required',
'convinience_branch'=>'required',
'adress'=>'required',
'prefecture'=>'required'
]);
$id = Auth::guard('admin')->id();
$admin = Admin::find($id);
$admin->name = $request->name;
$admin->password= Hash::make($request->password);
$admin->convinience_name = $request->convinience_name;
$admin->convinience_branch = $request->convinience_branch;
$admin->prefecture=$request->prefecture;
$admin->adress=$request->adress;
$admin->save();
return redirect('admin')->with('flash_message', __('Registered.'));
}
}
