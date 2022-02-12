<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostFormRequest;

use App\Models\Customers;
use App\Models\Suppliers;
use App\Models\Products;
use App\Models\ProductsInvoice;
use DataTables;

class ProductInvoiceController extends Controller
{
    public function storeProdforInvoice(Request $request)
        {
            $this->validate($request, [
                'designation' => 'required',
                'uml' => 'required',
                'qte' => 'required',
                'p_u' => 'required',
                'p_t' => 'required',
            ]);
            $prod = new ProductsInvoice();
            $prod->invoice_id = "550";
            $prod->designation = $request->input('designation');
            $prod->uml = $request->input('uml');
            $prod->qte = $request->input('qte');
            $prod->p_u = $request->input('p_u');
            $prod->p_t = $request->input('p_t');
            $prod->save();
            return response()->json([
                    'status'=>200,
                    'message'=>'Product added to invoice successfully',
                ]);
        }

    public function destroy($id) {
            $product = ProductsInvoice::find($id);
            $product->delete();
            return back()->with('success', 'Product deleted successfuly !');

        }

}
