<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostFormRequest;
use Response;
use App\Models\Products;
use DataTables;

class ProductController extends Controller
{
    //
    public function ProductsShow() {
        $data['title'] = "Products list";
        $data['products'] = Products::latest()->get();
        return view('products.index',compact('data'));
    }

    public function ProductsShowAjax(Request $request){

        if ($request->ajax()) {
            $suppliers = Products::latest()->get();
            return Datatables::of($suppliers)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = "<a href='/products/edit/$row->id' class='btn btn-dark btn-sm'><i class='fas fa-cog'></i></a> <a href='/products/del/$row->id' class='btn btn-danger btn-sm'><i class='fas fa-trash'></i></a>";
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function ProductsAjaxlist() {
        $data['title'] = "Products list";
        $data['productsajax'] = Products::latest()->get();
        return Response::json($data['productsajax']);
    }
    
    public function store(Request $request)
        {
            $this->validate($request, [
            'name' => 'required|min:3',
        ]);
            
        $post = new Products();
        $post->name = $request->input('name');
        $post->details = $request->input('details');
        $post->price = $request->input('price');
        $post->tax = $request->input('tax');
        //$post->is_active = $request->has('is_active');
        $post->save();
        return redirect('/products')->with('success', 'Produit enregistré avec succèe !');
        }

         public function show($id) {
            $data['products'] = DB::select('select * from products where id ='.$id);
            return view('products.edit',['data'=>$data]);

        }

        public function update(Request $request,$id) {
            $name = $request->input('name');
            $details = $request->input('details');
            $price = $request->input('price');
            $tax = $request->input('tax');
            $is_active = $request->has('is_active');

            DB::update('update products set name=?,details=?,price=?,tax=?,is_active=? where id = ?',[$name,$details,$price,$tax,$is_active,$id]);
            return redirect('/products')->with('success', 'Produit edité avec succée !');

        }

        public function destroy($id) {
            $product = Products::find($id);
            $product->delete();
            return redirect('/products')->with('success', 'Produit supprimé avec succée !');

        }
}
