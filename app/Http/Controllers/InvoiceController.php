<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostFormRequest;

use App\Models\Customers;
use App\Models\Suppliers;
use App\Models\Products;
use App\Models\Invoices;
use App\Models\ProductsInvoice;


use DataTables;

class InvoiceController extends Controller
{
    //
    public function InvoicesShow() {
        $data['title'] = "Invoices list";
        $data['invoices'] = Invoices::latest()->get();
        return view('invoices.index',compact('data'));
    }

    public function InvoicesProductShowAjax() {
        $data['title'] = "Invoices list";
        $data['invoicesprod'] = ProductsInvoice::all();
        return response()->json($data['invoicesprod']);
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

    public function createStep1(){
        $data['customers'] = Customers::latest()->get();
        $data['suppliers'] = Suppliers::latest()->get();
        return view('invoices.create2',compact('data'));
    }

    public function create(){
        $data['customers'] = Customers::latest()->get();
        $data['suppliers'] = Suppliers::latest()->get();
        $data['products'] = Products::latest()->get();
        return view('invoices.create',compact('data'));
    }

    public function store(Request $request)
        {
            $this->validate($request, [
            'customer_name' => 'required',
            'user_name' => 'required',
            'supplier_name' => 'required',
        ]);
            
        $post = new Invoices();
        $post->customer_name = $request->input('customer_name');
        $post->supplier_name = $request->input('supplier_name');
        $post->is_paid = $request->input('is_paid');
        $post->user_name = \Auth::User()->name;
        $post->relase_date = date('Y-m-d H:i:s');
        $post->save();
        $invoice_id = $post->id;
        return redirect('/invoices/'.$invoice_id)->with('success', 'Etape2 : selection du produits ');
        }

    public function show($invoice_id)
    {
        $data['invoice'] = Invoices::find($invoice_id);
        $data['products'] = Products::all();
        return view('invoices.show',compact('data'));
    }

    public function destroy($id) {
            $invoice = Invoices::find($id);
            $invoice->delete();
            return back()->with('success', 'Facture supprimé avec succée');

        }


}
