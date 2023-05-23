<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactPutRequest;
use App\Http\Requests\ContactPostRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        
        return view('contacts',['contacts'=>$contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactPostRequest $request)
    {

        Contact::create($request->all());
        return redirect()
        ->route('contacts-index')
        ->with('success', 'contact successfully added!');
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
        $contacts = Contact::where('id',$id)->first();
        if(empty($contacts)){
            return redirect()->route('contacts-index');
        }

        return view('edit-contact',['contacts'=>$contacts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactPutRequest $request, $id)
    {
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact
        ];

        Contact::where('id',$id)->update($data);

        return redirect()->route('contacts-index')->with('success', 'contact successfully changed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::where('id',$id)->delete();
        return redirect()->route('contacts-index');
    }
}
