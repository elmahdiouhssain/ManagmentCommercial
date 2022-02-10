<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostFormRequest;

use App\Models\Customers;
use App\Models\Suppliers;
use App\Models\Invoices;
use DataTables;

class InvoiceController extends Controller
{
    //
    public function InvoicesShow() {
        $data['title'] = "Invoices list";
        $data['invoices'] = Invoices::latest()->get();
        return view('invoices.index',compact('data'));
    }

    public function InvoicesShowAjax(Request $request){

        if ($request->ajax()) {
            $invoices = Invoices::latest()->get();
            return Datatables::of($invoices)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = "<a href='/invoices/edit/$row->id' class='btn btn-dark btn-sm'><i class='fas fa-cog'></i></a> <a href='/invoices/del/$row->id' class='btn btn-danger btn-sm'><i class='fas fa-trash'></i></a>";
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function create(){
        $data['customers'] = Customers::latest()->get();
        $data['suppliers'] = Suppliers::latest()->get();
        return view('invoices.create',compact('data'));
    }

    public function store(Request $request)
        {
            $this->validate($request, [
            'customer_id' => 'required',
            'user_id' => 'required',
            'supplier_id' => 'required',
        ]);
            
        $post = new Invoices();
        $post->customer_id = $request->input('name');
        $post->user_id = $request->input('user_id');
        $post->supplier_id = $request->input('supplie_r_id');
        $post->relase_date = date("d-m-Y");
        $post->pdf_url = $request->input('pdf_url');
        $post->total_ht = $request->input('total_ht');
        $post->total_tva = $request->input('total_tva');
        $post->total_ttc = $request->input('total_ttc');
        $post->release_from = \Auth::User()->name;   

        $post->save();
        return redirect('/invoices')->with('success', 'Product saved successfuly !');
        }
}
