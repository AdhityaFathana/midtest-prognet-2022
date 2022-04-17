<?php

namespace App\Http\Controllers;

use App\Models\Detail_Paket;
use Illuminate\Http\Request;
use App\Models\Paket;
use Illuminate\Pagination\paginator;
class PackagesController extends Controller
{
    //


    public function Packages() {
        $data = Packages::latest()->paginate(5);
        Paginator::useBootstrap();
        return view('packages.index',compact('data'));
    }

    public function addPackages () {
        return view('add.packages');
    }
    public function savePackages (Request $request) {

        $request->validate([
            'name' =>'required',
            'normal_price'=>'required',
            'end_price'=>'required',
        ]);

        return redirect('packages.index');
    }

    public function editPackages (Request $request,$id) {
       $data = Packages::find($id);
       return view('edit.packages', compact('data'));
    }
    public function saveEditPackges (Request $request,$id) {

                $request->validate([
                    'packages'=>'required',
                    'normal_price'=>'required',
                    'end_price'=>'required',
                    ]);
            
            return redirect('packages.index');
    }
    public function deletePackages($id){

        $data = Packages::find($id);
        $data->delete();
        return redirect('packages.index');
    }
}
