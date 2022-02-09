<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostFormRequest;
use Response;
use Hash;

class DashboardController extends Controller
{
    //
    public function DashboardShow() {
        $data['title'] = "Dashboard";
        return view('dashboard.index',compact('data'));
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('warning', 'You are logged out with success !');
    }
}
