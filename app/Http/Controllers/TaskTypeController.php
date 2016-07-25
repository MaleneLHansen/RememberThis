<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TaskType; 
use App\Http\Requests\TaskTypeRequest; 

class TaskTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function overview(){
    	$tasktypes = Tasktype::notdeleted()->get(); 

    	return view('tasktype.overview')->with('tasktypes', $tasktypes);
    }

    public function newTaskType(){

    }

    public function edit(Tasktype $type){

    }

    public function create(TaskTypeRequest $request){

    }

    public function update(TaskType $type, TaskTypeRequest $request){
    	
    }


}
