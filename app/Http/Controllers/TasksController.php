<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Contracts\TaskServiceInterface;

use Illuminate\Http\Request;

class TasksController extends Controller {
	/*old index*/
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(TaskServiceInterface $taskService) 
	{
		return response()->json($taskService->getAllTasks());	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request, TaskServiceInterface $taskService) 
	{
		if($taskService->create($request->all())){
			return response()->json(['status' => 'success']);			
		}
	}	

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id, TaskServiceInterface $taskService) 
	{
		if($taskService->delete($id)){
			return response()->json(['status' => 'success']);
		}
	}

	/**
	 * Change status of the specified resource from storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function changeStatus(Request $request, TaskServiceInterface $taskService)
	{
		if($taskService->changeStatus($request->all())){
			return response()->json(['status' => 'success']);			
		}
	}
}
