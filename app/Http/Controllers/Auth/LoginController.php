<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function username()
    {
        return 'login';
    }

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        $login_type = filter_var($request->input('email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        $credentials = [$login_type => $request->input('email'), 'password' => $request->input('password')];

        if (Auth::attempt($credentials)) {
            return redirect()->intended($this->redirectPath());
        }

        $user = \App\Models\User::where($login_type, $request->input('email'))->first();

        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'ناوی بەکارهێنەر یان ئیمەیڵی پێشکەشکراو هەڵەیە.']);
        }

        return redirect()->back()->withErrors(['password' => 'وشەی نهێنی پێشکەشکراو هەڵەیە']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
