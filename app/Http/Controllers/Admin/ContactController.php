<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cont = Contact::orderBy('created_at','desc')->get();
        return view('admin.contact.index',compact('cont'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cont = Contact::orderBy('created_at','desc')->get();
        return view('admin.contact.create',compact('cont'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cont = new Contact();
        $cont->address = $request->address;
        $cont->email = $request->email;
        $cont->phone = $request->phone;
        $cont->save();

        return redirect()->back()->withSuccess('Contact perfectly added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $cont)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $cont = Contact::all();
        return view('admin.contact.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $cont)
    {
        $cont->address = $request->address;
        $cont->email = $request->email;
        $cont->phone = $request->phone;
        $cont->save();
        /*$cont->update();*/

        return redirect()->back()->withSuccess('Contact perfectly edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact $cont
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->back()->withSuccess('Contact perfectly deleted');
    }
}
