<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TasksController extends Controller
{
    //

    public function index(){

    	$tasks = Task::all();


    	return $tasks;

    	return view('tasks.index',compact('tasks'));

    }


    public function show (Task $task){

    	//$tasks = Task::find($id);

    	return $task;

	//dd($tasks);


    return view('tasks.show', compact('tasks'));
}
    
}
