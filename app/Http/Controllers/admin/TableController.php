<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Middleware\Authenticate;
use App\model\painel\TablePrice;

class TableController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $table = TablePrice::all();
        return view('admin.table.index',[
            'table'     => $table
        ]);
    }

    public function create()
    {
        return view('admin.table.table-create');
    }

    public function store(Request $request)
    {
        $table = TablePrice::create([
            'name_service'    => $request['table'],
            'price'         => $request['price'],
        ]);
        if(count($table) == 0){
            return redirect()->back();
        } else {
            return redirect('admin/table');
        }
    }

    public function edit($id)
    {
        $tab = TablePrice::find($id);
        return view('admin.table.table-update', compact('tab'));
    }

    public function update($id, Request $request)
    {
        $request->all();
        $table = TablePrice::find($id)->update([
            'name_service'  => $request['table'],
            'price'         => $request['price']
        ]);
        if(count($table) == 0){
            return redirect()->back();
        } else {
            return redirect('admin/table');
        }
    }

    public function destroy($id)
    {
        $table = TablePrice::find($id)->delete();
        if(count($table) == 0){
            return redirect()->back();
        } else {
            return redirect('admin/table');
        }
    }


}
