<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Project as Project; 
use App\Contact as Contact; 
use App\ProjectType as ProjectType;
use Carbon\Carbon as Carbon; 
use App\Http\Requests\ProjectRequest as ProjectRequest; 


class ProjectController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

    	$project = Project::whereIn('status', [1,2])->get(); 
    	return view('project.overview')->with('projects', $project);
    }

    public function delete(Project $project){
    	$project->active = 0;
    	$project->save(); 
    	return redirect()->route('project.all');
    }

    public function edit(Project $project){

    	$contacts = Contact::where('status', 1)->lists('name', 'id');
    	$projecttypes = ProjectType::where('status', 1)->lists('name', 'id');
    	return view('project.edit')->with(array('project' => $project, 'contacts' => $contacts, 'types' => $projecttypes));
    }

    public function update(Project $project, ProjectRequest $request){
    	$project->fill($request->input());
    	$project->contact_id = $request->input('contact');
		$project->projecttype_id = $request->input('type');
		$project->beginDate = Carbon::createFromFormat('d/m/Y', $request->input('beginDate'))->toDateTimeString();  
    	$project->save();
    	return redirect()->route('project.all');
    }

    public function new(){
    	$contacts = Contact::where('status', 1)->lists('name', 'id');
    	$projecttypes = ProjectType::where('status', 1)->lists('name', 'id');
    	return view ('project.edit')->with(array('project' => new Project(), 'contacts' => $contacts, 'types' => $projecttypes));
    }

    public function create(ProjectRequest $request){

    	$project = new Project(); 
    	$project->fill($request->input()); 

		$project->contact_id = $request->input('contact');
		$project->projecttype_id = $request->input('type');

		$project->beginDate = Carbon::createFromFormat('d/m/Y', $request->input('beginDate'))->toDateTimeString(); 



    	$project->user_id = \Auth::user()->id; 

    	$project->save(); 
    	return redirect()->route('project.all');
	}

	public function info(Project $project){

	}

}
