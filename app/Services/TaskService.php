<?php

namespace App\Services;

use App\Models\Task;
use App\Contracts\TaskServiceInterface;

class TaskService implements TaskServiceInterface
{
	public function __construct(Task $task)
	{	
		$this->task = $task;
	}


	/**
     * Get city by county code and city slug.
     *
     * @return Response
     */
	public function getAllTasks()
	{
		return $this->task->orderBy('is_completed', 'ASC')->get();	
	}

	public function create($inputs)
	{
		return $this->task->create($inputs);
	}

	public function changeStatus($inputs)
	{
		$task = $this->task->find($inputs['id']);
		$task->update([
			'is_completed' => $inputs['is_completed']
		]);
	}

	public function delete($id)
	{
		return $this->task->find($id)->delete();
	}
}