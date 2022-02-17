<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostFormRequest;
use Response;
use Hash;
use App\Models\User;
use App\Models\Invoices;
use App\Models\Customers;
use App\Models\Products;
use App\Models\Suppliers;
use App\Models\ProductsInvoice;
class DashboardController extends Controller
{
    //
    public function DashboardShow() {
        $data['title'] = "Dashboard";
        $data['i_count'] = Invoices::all()->count();
        $data['inv_count_total'] = Invoices::all()->sum('total_ht');
        $data['paid_count'] = DB::table('invoices')->where('is_paid',1)->count();
        $data['paid_sum'] = DB::table('invoices')->where('is_paid',1)->sum('total_ht');
        $data['p_count'] = Products::all()->count();
        $data['pactive_count'] = DB::table('products')->where('is_active',1)->count();
        $data['c_count'] = Customers::all()->count();
        $data['admin_count'] = DB::table('users')->where('is_admin',1)->count();
        /////total of today//////
        $data['salesoftheday'] = DB::table('invoices')->select(DB::raw('*'),DB::raw('sum(total_ht) as totalAmount'))
              ->whereRaw('Date(created_at) = CURDATE()')
              ->groupby('id')
              ->get();

        $data['totalAmount'] = $data['salesoftheday']->sum('totalAmount');
        
        return view('dashboard.index',compact('data'));
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('warning', 'Vous etes deconnecté avec succée !');
    }
}
