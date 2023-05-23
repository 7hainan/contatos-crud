<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class EditContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        
        return view('edit-contact',['contacts'=>$contacts]);
    }
}
