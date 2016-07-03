<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \App\ProjectType as ProjectType; 
use \App\Http\Requests\ProjectTypeRequest as ProjectTypeRequest;

class ProjectTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	return view('projecttype.overview');
    }

    public function delete(ProjectType $projecttype){
    	$projecttype->active = 0;
    	$projecttype->save(); 
    	return redirect()->route('projecttype.all');
    }

    public function edit(ProjectType $projecttype){
    	return view('projecttype.edit')->with('projecttype', $projecttype);
    }

    public function update(ProjectType $projecttype, ProjectTypeRequest $request){
    	$projecttype->fill($request->input());
    	$projecttype->save();
    	return redirect()->route('projecttype.all');
    }

    public function new(){
    	return view ('projecttype.edit')->with('projecttype', new ProjectType());
    }

    public function create(ProjectTypeRequest $request){

    	$projecttype = new ProjectType(); 
    	$projecttype->fill($request->input()); 
    	$projecttype->user_id = \Auth::user()->id; 
    	$projecttype->save(); 
    	return redirect()->route('projecttype.all');
	}
}
