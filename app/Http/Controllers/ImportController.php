<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use DB;
use App\Imports\TradersImport;
use App\Imports\GeneratorImport;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Hesto\MultiAuth\Traits\LogsoutGuard;
use App\Imports\BulkImport;
use App\Bulkmessage;

use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    
  
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function importxls()

    {  
        return view ('admin.pages.traderimport');
    }
    public function importgen()

    {  
        return view ('admin.pages.genimport');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function import(Request $request)
    {

     $this->validate($request, [
      'select_file'  => 'required|mimes:xls,xlsx'
     ]);
 
     $path = $request->file('select_file')->getRealPath();
     
      
     $data = Excel::import(new TradersImport, $request->file('select_file') );

     $import = new TradersImport;
    
    if ($import->failures()->isNotEmpty()) {
            return back()->withFailures($import->failures());
        }

    

     return back()->with('success', 'Data Imported successfully.');
    }

     function scrapgen(Request $request)
    {

     $this->validate($request, [
      'select_file'  => 'required|mimes:xls,xlsx'
     ]);
 
     $path = $request->file('select_file')->getRealPath();
     
      
     $data = Excel::import(new GeneratorImport, $request->file('select_file') );

     $import = new GeneratorImport;

    if ($import->failures()->isNotEmpty()) {
            return back()->withFailures($import->failures());
        }

   
     return back()->with('success', 'Data Imported successfully.');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function UploadList(Request $request)
    { 
      $this->validate($request, [
      'select_file'  => 'required'
     ]);

   
    $path = $request->file('select_file')->getRealPath();
     
     
     $data = Excel::import(new BulkImport, $request->file('select_file') );
  
     $import = new BulkImport;

    if ($import->failures()->isNotEmpty()) {
            return back()->withFailures($import->failures());
        }
 

     return back()->with('success', 'Data Imported successfully.');
    
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
