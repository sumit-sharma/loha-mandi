<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use DB;
use Yajra\Datatables\Datatables;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contact.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function InquiryList()
    {
        
        $inq = DB::table('contacts')->orderBy('created_at', 'asc')->get();
 
        return Datatables::of($inq) 
            ->addColumn('action', function ($inq) {
                return '  <a href="/admin/contact/view/'.$inq->id.'" ><i class="fa fa-eye"></i></a><a href="/admin/contact/delete/'.$inq->id.'"><i class="feather icon-trash"></i></a>'
                ;
            })
            
           

            ->removeColumn('password')
            ->make(true);
    
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $contact = new Contact;
        $contact->name = $request['name'];
        $contact->phone = $request['phone'];
        $contact->email = $request['email'];
        $contact->subject = $request['subject'];
        $contact->description = $request['description'];
        $contact->save();
        return back()->with('success', 'Message has been sent successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function InquiryView($id)
    {
        
        $inq =Contact::where('id',$id)->first();
     
        return view('admin.contact.view')->with('inq',$inq);
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
        $inq=Contact::find($id);

      
        $inq->destroy($id);
      
        return back()->with('success' ,'Inquery delete successfully');
    }
}
