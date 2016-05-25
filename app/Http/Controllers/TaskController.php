<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Task;

class TaskController extends Controller
{
    //

    function add(Request $req){
    	$data = $req->only(['title','note','importance','urgency','difficulty']);
    	$task = Task::create($data);
    	$action = Config::get('constants.actions.create');
    	Track::create(['task_id'=>$task->id,'from_state'=>0,'to_state'=>1,'action'=>$action])
    	return response()->json($task);
    }

    function todo(Request $req){
    	$tasks = Task::todo();
    	return response()->json($tasks);
    }
}
