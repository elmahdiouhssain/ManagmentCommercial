<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostFormRequest;

use App\Models\Suppliers;
use DataTables;

class SupplierController extends Controller
{
    //
    public function SuppliersShow() {
        $data['title'] = "Suppliers list";
        $data['suppliers'] = Suppliers::latest()->get();
        return view('suppliers.index',compact('data'));
    }

    public function SuppliersShowAjax(Request $request){

        if ($request->ajax()) {
            $suppliers = Suppliers::latest()->get();
            return Datatables::of($suppliers)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = "<a href='/suppliers/edit/$row->id' class='btn btn-dark btn-sm'><i class='fas fa-cog'></i></a>";
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    public function store(Request $request)
        {
            $this->validate($request, [
            'vendor_name' => 'required|min:3',

        ]);
            
        $post = new Suppliers();
        $post->vendor_name = $request->input('vendor_name');
        $post->email = $request->input('email');
        $post->tele = $request->input('tele');
        $post->currency = $request->input('currency');
        $post->addr1 = $request->input('addr1');
        $post->addr2 = $request->input('addr2');
        $post->city = $request->input('city');
        $post->zipcode = $request->input('zipcode');
        $post->country = $request->input('country');
        $post->province = $request->input('province');
        $post->fname = $request->input('fname');
        $post->save();
        return redirect('/suppliers')->with('success', 'Fournisseur enregistré avec succée !');
        }

        public function show($id) {
            $data['supplier'] = DB::select('select * from suppliers where id ='.$id);
            return view('suppliers.edit',['data'=>$data]);

        }

        public function update(Request $request,$id) {
            $vendor_name = $request->input('vendor_name');
            $email = $request->input('email');
            $tele = $request->input('tele');
            $currency = $request->input('currency');
            $addr1 = $request->input('addr1');
            $addr2 = $request->input('addr2');
            $city = $request->input('city');
            $zipcode = $request->input('zipcode');
            $country = $request->input('country');
            $province = $request->input('province');
            $fname = $request->input('fname');

            DB::update('update suppliers set vendor_name=?,email=?,tele=?,currency=?,addr1=?,addr2=?,city=?,zipcode=?,country=?,province=?,fname=? where id = ?',[$vendor_name,$email,$tele,$currency,$addr1,$addr2,$city,$zipcode,$country,$province,$fname,$id]);

            return redirect('/suppliers')->with('success', 'Fournisseur modifié avec succée !');

        }

        public function destroy($id) {
            $customer = Suppliers::find($id);
            $customer->delete();
            return redirect('/suppliers')->with('success', 'Fournisseur supprimé avec succée !');

        }
}
