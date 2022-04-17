<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Pagination\paginator;
class CategoriesController extends Controller
{
    //
    public function Categories () {
        $data = Categories::latest()->paginate(5);
        Paginator::useBootstrap();
        return view('categories.index',compact('data'));
    }

    public function addCategories () {
        return view('addCategories.categories');
    }
    public function saveCategories (Request $request) {

        $request->validate([
            'categories'=>'required',
        ]);

        $data = new Categories();
        $data -> categories_name=$request->categories;
        $data->save();

        return redirect('categories.index');
    }

    public function editCategories (Request $request,$id) {
       $data = Categories::find($id);
       return view('editCategories.categories', compact('data'));
    }
    public function saveeditKategori (Request $request,$id) {

        $request->validate([
        'categories'=>'required',
        ]);

        $data = Categories::find($id);
        $data->categories_name=$request->categories;
        $data->update();

        return redirect('categories.index');
    }
    public function deleteCategories($id){

        $data = Categories::find($id);
        $data->delete();
        return redirect('categories.index');
    }
}
