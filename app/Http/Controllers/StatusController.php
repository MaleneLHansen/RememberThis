<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\StatusRequest;
use App\Status;

class StatusController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $status = Status::get(); 
        $message = \Session::pull('created', null);
    	return view('status.index')->with('status', $status)->with('message', $message);
    }

    public function newStatus(){
    	return view('status.edit')->with(['status' => new Status()]);
    }

    public function edit(Status $status){
    	return view('status.edit')->with(['status' => $status]);
    }

    public function create(StatusRequest $request){
        $status = new Status($request->input());
        $status->save(); 
        \Session::put('created', _('The new status has been created'));
        return redirect()->route('status.all');
    }
    public function update(Statis $status, StatusRequest $request){
        $status->fill($request->input())->save(); 
        \Session::put('created', _('The status was saved')); 
        return redirect()->route('status.all');

    }
}
