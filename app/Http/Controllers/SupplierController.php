<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Imports\SupplierImport;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Excel;

class SupplierController extends Controller
{

    public function import(Request $request)
    {
        return view('supplier.import');
    }

    public function act_import(Request $request)
    {   

        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()
                        ->with('error', 'Data Supplier gagal di impor!')
                        ->withErrors($validator);
        }

        if($validator){
            Excel::import(new SupplierImport($request->code, $request->name, $request->email, $request->address, $request->phone ), $request->file);
            return redirect('supplier')->with('status', 'Data Supplier berhasil di impor!');
        }else{
            return redirect()->back()->with('status', 'Data Supplier gagal di impor!');
        }
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 100;
        $data = Supplier::paginate(100);
        return view('supplier.index', compact('data'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
