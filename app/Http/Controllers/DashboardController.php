<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Redirect user ke dashboard sesuai dengan role mereka
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $roleName = $user->getRoleName();

        switch ($roleName) {
            case 'staff':
                return redirect()->route('staff');
            case 'supervisor':
                return redirect()->route('supervisor');
            case 'manager':
                return redirect()->route('manager');
            case 'direktur':
                return redirect()->route('direktur');
            case 'finance':
                return redirect()->route('finance');
            default:
                return view('dashboard');
        }
    }
}
