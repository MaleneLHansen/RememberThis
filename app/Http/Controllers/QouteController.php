<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \App\Qoute as Qoute;
use \App\Http\Requests\QouteRequest as QouteRequest;

class QouteController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	return view('qoute.overview');
    }

    public function delete(Qoute $qoute){
    	$qoute->active = 0;
    	$qoute->save(); 
    	return redirect()->route('qoute.all');
    }

    public function edit(Qoute $qoute){
    	return view('qoute.edit')->with('qoute', $qoute);
    }

    public function update(Qoute $qoute, QouteRequest $request){
    	$qoute->fill($request->input());
    	$qoute->save();
    	return redirect()->route('qoute.all');
    }

    public function new(){
    	return view ('qoute.edit')->with('qoute', new Qoute());
    }

    public function create(QouteRequest $request){

    	$qoute = new Qoute(); 
    	$qoute->fill($request->input()); 
    	$qoute->user_id = \Auth::user()->id; 
    	$qoute->save(); 
    	return redirect()->route('qoute.all');
	}
}
