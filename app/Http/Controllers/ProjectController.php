<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Project as Project; 
use App\Contact as Contact; 
use App\Comment as Comment; 
use App\Status; 
use App\Task;
use App\ProjectType as ProjectType;
use Carbon\Carbon as Carbon; 
use App\Http\Requests\ProjectRequest as ProjectRequest; 
use App\Http\Requests\CommentRequest as CommentRequest; 
use App\Http\Requests\TaskRequest;


class ProjectController extends Controller
{
       public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

		$project = Project::get(); 
		$status = Status::get(); 
    	return view('project.overview')->with('projects', $project)->with('type', null)->with('status', $status);
    }

    public function delete(Project $project){
    	$project->active = 0;
    	$project->save(); 
    	return redirect()->route('project.all');
    }

    public function edit(Project $project){

    	$contacts = Contact::where('status', 1)->lists('name', 'id');
    	$projecttypes = ProjectType::where('status', 1)->lists('name', 'id');
    	$status = Status::lists('name', 'id');
    	return view('project.edit')->with(array('project' => $project, 'contacts' => $contacts, 'types' => $projecttypes, 'status' => $status));
    }

    public function update(Project $project, ProjectRequest $request){
    	$project->fill($request->input());
    	$project->contact_id = $request->input('contact');
		$project->projecttype_id = $request->input('type');
		$project->beginDate = Carbon::createFromFormat('d/m/Y', $request->input('beginDate'))->toDateTimeString();  
		$project->status_id = $request->input('status_id');
    	$project->save();
    	return redirect()->route('project.info', $project->id);
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

		$status = Status::where('name', 'Not started')->first();
		$project->status_id = $status->id;

		$project->beginDate = Carbon::createFromFormat('d/m/Y', $request->input('beginDate'))->toDateTimeString(); 



    	$project->user_id = \Auth::user()->id; 

    	$project->save(); 
    	return redirect()->route('project.all');
	}

	public function info(Project $project){
		$tasks = Task::where('project_id', $project->id)->orderBy('order')->get(); 

		return view('project.info')->with(['project' => $project, 'tasks' => $tasks]);
	}

	public function filter($type){

		$stat = Status::where('name', $type)->first(); 
		$projects = Project::where('status_id', $stat->id)->get();
		$status = Status::get(); 




    	return view('project.overview')->with('projects', $projects)->with('type', $stat->name)->with('status', $status);
	}

	public function newComment(Project $project, CommentRequest $request){
		$comment = new Comment();
		$comment->fill($request->input());
		$comment->project_id = $project->id;
		$comment->save(); 

		return redirect()->route('project.info', $project->id);
	}

	public function editComment(Project $project, CommentRequest $request){
		$comment = Comment::find($request->input('commentId'));

		$comment->fill($request->input());
		$comment->save(); 

		return redirect()->route('project.info', $project->id);
	}

	public function deleteComment(){
		
		$comment = Comment::find(\Request::input('commentDeleteId'));
		$comment->status = 0;
		$comment->save(); 
		return redirect()->route('project.info', $comment->project->id);
		
	}

	public function newTask(Project $project, TaskRequest $request){
		$task = new Task($request->input()); 
		
	}
}
