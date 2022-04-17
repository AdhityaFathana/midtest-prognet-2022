<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Pagination\paginator;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function Product () {
        $data = Produk::join('categories','product.categories_id','=','categories.id')
        ->select('product.*','categories.categories_name')->latest()->paginate(20);
        Paginator::useBootstrap();
        return view('product.index',compact('data'));
    }

    public function addProducut () {
        $data = Categories::all();
        return view('add.product', compact('data'));
    }
    public function saveProduct (Request $request) {

        $request->validate([
            'categories_id'=>'required',
            'name'=>'required',
        ]);

        return redirect('product.index');
    }

    public function editProduct (Request $request,$id) {
       $data = Product::find($id);
       $datas = Categories::all();
       return view('edit.product', compact('data','datas'));
    }
    public function saveEditProduct (Request $request,$id) {

                $request->validate([
                    'categories_id'=>'required',
                    'name'=>'required',
                    ]);

            $data = Product::find($id);
            $data->id_kategori=$request->id_kategori;
            $data->nama_produk=$request->produk;
            $data->update();

            return redirect('product.index');
    }
    public function deleteProduct($id){

        $data = Produk::find($id);
        $data->delete();
        return redirect('product.index');
    }
}
