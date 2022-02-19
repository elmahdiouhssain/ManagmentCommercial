<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostFormRequest;

use App\Models\Customers;
use DataTables;

class CustomersController extends Controller
{
    //
    public function CustomersShow() {
        $data['title'] = "Customers";
        $data['customers'] = Customers::latest()->get();
        return view('customers.index',compact('data'));
    }

    public function CustomersShowAjax(Request $request){

        if ($request->ajax()) {
            $customers = Customers::latest()->get();
            return Datatables::of($customers)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = "<a href='/customers/edit/$row->id' class='btn btn-dark btn-sm'><i class='fas fa-cog'></i></a> ";
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function store(Request $request)
        {
            $this->validate($request, [
            'nom_complete' => 'required|min:3',
            'email' => 'required',

        ]);
            
        $post = new Customers();
        $post->nom_complete = $request->input('nom_complete');
        $post->gender = $request->input('gender');
        $post->email = $request->input('email');
        $post->tele = $request->input('tele');
        $post->currency = $request->input('currency');
        $post->addr1 = $request->input('addr1');
        $post->addr2 = $request->input('addr2');
        $post->city = $request->input('city');
        $post->zipcode = $request->input('zipcode');
        $post->country = $request->input('country');
        $post->province = $request->input('province');
        $post->account_number = $request->input('account_number');
        $post->fax = $request->input('fax');
        $post->mobile = $request->input('mobile');
        $post->website = $request->input('website');
        $post->note = $request->input('note');

        $post->save();
        return redirect('/customers')->with('success', 'Client enregistré avec succée');
        }


        public function show($id) {
            $data['customer'] = DB::select('select * from customers where id ='.$id);
            //$data['societes'] = Amical::all();
            return view('customers.edit',['data'=>$data]);

        }

        public function update(Request $request,$id) {
            $nom_complete = $request->input('nom_complete');
            $gender = $request->input('gender');
            $email = $request->input('email');
            $tele = $request->input('tele');
            $currency = $request->input('currency');
            $addr1 = $request->input('addr1');
            $addr2 = $request->input('addr2');
            $city = $request->input('city');
            $zipcode = $request->input('zipcode');
            $country = $request->input('country');
            $province = $request->input('province');
            $account_number = $request->input('account_number');
            $fax = $request->input('fax');
            $mobile = $request->input('mobile');
            $website = $request->input('website');
            $note = $request->input('note');

            DB::update('update customers set nom_complete=?,gender=?,email=?,tele=?,currency=?,addr1=?,addr2=?,city=?,zipcode=?,country=?,province=?,account_number=?,fax=?,mobile=?,website=?,note=? where id = ?',[$nom_complete,$gender,$email,$tele,$currency,$addr1,$addr2,$city,$zipcode,$country,$province,$account_number,$fax,$mobile,$website,$note,$id]);

            return redirect('/customers')->with('success', 'Client modifié avec succée !');

        }

        public function destroy($id) {
            $customer = Customers::find($id);
            $customer->delete();
            return redirect('/customers')->with('success', 'Client modifié avec succée !');

        }




}
