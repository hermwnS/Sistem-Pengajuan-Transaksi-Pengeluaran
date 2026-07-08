<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        switch ($credentials['email']) {
            case 'staff@contoh.com':
                return redirect('staff/staffView');
                break;
            case 'manager@contoh.com':
                return redirect('manager/managerView');
                break;
            case 'spv@contoh.com':
                return redirect('spv/spvView');
                break;
            case 'finance@contoh.com':  
                return redirect('finance/financeView');
                break;
            case 'direktur@contoh.com':
                return redirect('direktur/direkturView');
                break;
            default:
                return redirect('/login')->withErrors(['email' => 'Invalid credentials.']);
                break;  
        }
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
