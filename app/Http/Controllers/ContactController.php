<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \App\Contact as Contact; 
use \App\Http\Requests\ContactRequest as ContactRequest;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	return view('contact.overview');
    }

    public function delete(Contact $contact){
    	$contact->active = 0;
    	$contact->save(); 
    	return redirect()->route('contact.all');
    }

    public function edit(Contact $contact){
    	return view('contact.edit')->with('contact', $contact);
    }

    public function update(Contact $contact, ContactRequest $request){
    	$contact->fill($request->input());
    	$contact->save();
    	return redirect()->route('contact.all');
    }

    public function new(){
    	return view ('contact.edit')->with('contact', new Contact());
    }

    public function create(ContactRequest $request){


    	$contact = new Contact(); 
    	$contact->fill($request->input()); 
    	$contact->user_id = \Auth::user()->id; 
    	$contact->save(); 
    	return redirect()->route('contact.all');
	}
}
