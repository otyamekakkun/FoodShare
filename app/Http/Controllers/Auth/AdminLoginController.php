<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// ここから追加
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
// ここまで追加

class AdminLoginController extends Controller
{
    // ここから追加
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admins.login');
    }

    public function login(Request $request)
    {
        // ログイン時のバリデーション
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // ログインが成功したとき
            return redirect()->intended(route('admin.index'));
        }

        // ログインが失敗したとき
        return $this->sendFailedLoginResponse($request);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

    public function username()
    {
        return 'email';
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
    // ここまで追加
}