<?php

namespace App\Http\Controllers;

use App\Models\Detail_Paket;
use Illuminate\Http\Request;
use App\Models\Paket;
use Illuminate\Pagination\paginator;
class DetailPackagesController extends Controller
{
    //


    public function DetailPackages() {
        $data = DetailPackages::latest()->paginate(5);
        Paginator::useBootstrap();
        return view('detailPackages.index',compact('data'));
    }

    public function addDetailPackages () {
        return view('add.detailPackages');
    }
    public function saveDetailPackages (Request $request) {

        $request->validate([
            'packages_name' =>'required',
            'product_name'=>'required',
            'quantity'=>'required',
        ]);

        return redirect('detailPackages.index');
    }

    public function editDetailPackages (Request $request,$id) {
       $data = DetailPackages::find($id);
       return view('edit.detailPackages', compact('data'));
    }
    public function saveEditDetailPackges (Request $request,$id) {

                $request->validate([
                    'packages_name'=>'required',
                    'product_name'=>'required',
                    'quantity'=>'required',
                    ]);
            
            return redirect('detailPackages.index');
    }
    public function deleteDetailPackages($id){

        $data = DetailPackages::find($id);
        $data->delete();
        return redirect('detailPackages.index');
    }
}
