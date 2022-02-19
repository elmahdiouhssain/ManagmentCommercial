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

    public function InvoicesProductShowAjax(Request $request, $invoice_id) {
        $data['title'] = "Invoices list ajax";
        $data['invoicesprod'] = DB::select('select * from products_invoices where invoice_id ='.$invoice_id);
        return response()->json($data['invoicesprod']);
    }

    public function InvoicesShowAjax(Request $request){

        if ($request->ajax()) {
            $invoices = Invoices::latest()->get();
            return Datatables::of($invoices)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = "<a href='/invoices/$row->id' class='btn btn-dark btn-sm'><i class='fas fa-cog'></i></a> <a href='/invoices/pdf/$row->id' target='_blank' class='btn btn-primary btn-sm'><i class='fas fa-eye'></i></a> <a href=''class='btn btn-success btn-sm'><i class='fas fa-save'></i></a>";
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function createStep1(){
        $data['customers'] = Customers::all();
        $data['suppliers'] = Suppliers::all();
        return view('invoices.create2',compact('data'));
    }

    public function createStep3(Request $request, $id){
        $this->validate($request, [
            'total_ht' => 'required',
        ]);

        $id = $request->input('inv_id');
        $total_price = $request->input('total_ht');
        $user_name = \Auth::User()->name;
        $is_paid = $request->input('is_paid');

        //dd($is_paid);
        DB::update('update invoices set total_ht=?,is_paid=?,user_name=? where id = ?',[$total_price,$is_paid,$user_name,$id]);
        
        return redirect('/invoices')->with('success', 'Facture enregistré avec succée');
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
            'customer_id' => 'required',
            'supplier_id' => 'required',
            'user_name' => 'required',
        ]);

        $post = new Invoices();
        $post->user_id = \Auth::User()->id;
        $post->is_paid = $request->input('is_paid');
        $post->user_name = $request->input('user_name');
        $post->customer_id = $request->input('customer_id');
        $post->supplier_id = $request->input('supplier_id');
        $post->relase_date = date('Y-m-d H:i:s');
        $post->reference = $request->input('reference');
        $post->f_libelle = $request->input('f_libelle');
        $post->condition = $request->input('condition');
        $post->save();
        $invoice_id = $post->id;
        return redirect('/invoices/'.$invoice_id)->with('success', 'Etape2 : selection du produits ');
    }


    public function show($invoice_id)
    {
        $data['invoice'] = Invoices::find($invoice_id);
        $data['products'] = Products::all();
        $data['products_invoice'] = DB::select('select * from products_invoices where invoice_id ='.$invoice_id);
        return view('invoices.show',compact('data'));
    }

    public function showPDF($invoice_id)
    {
        $data['invoice'] = Invoices::find($invoice_id);
        $data['products'] = DB::select('select * from products_invoices where invoice_id ='.$invoice_id);
        return view('invoices.pdf',compact('data'));
    }

    public function destroy($id) {
            $invoice = Invoices::find($id);
            $invoice->delete();
            return redirect('/invoices')->with('success', 'Facture supprimé avec succée');
    }


}
