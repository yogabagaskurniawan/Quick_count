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
            'password' => ['Nim atau password anda salah !'],
        ]);
    }

    protected function authenticated(Request $request, $user)
    {
        if ($request->input('intended_route')) {
            // Jika ada intended_route dalam request, arahkan pengguna langsung ke rute tersebut
            return redirect($request->input('intended_route'));
        }
        

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
