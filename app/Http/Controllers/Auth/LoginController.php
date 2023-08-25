<?php

// namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function showLoginForm()
    {
        return view('auth.login');
    }

    protected function credentials(Request $request)
    {
        return [
            'nim' => $request->nim,
            'password' => $request->password,
        ];
    }

    public function username()
    {
        return 'nim';
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'password' => [trans('auth.failed')],
        ]);
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended('admin');
    }

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            'nim' => 'required|integer',
            'password' => 'required|string',
        ]);
    }
}
