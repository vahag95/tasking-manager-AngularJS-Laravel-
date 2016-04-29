<?php 
namespace App\Contracts;

interface TaskServiceInterface {

	/**
	 * get resource from tasks table.
	 *
	 * @param  array  $inputs
	 * @return void
	 */
	public function getAllTasks();

	/**
	 * Create new resource in tasks table.
	 *
	 * @param  array  $inputs
	 * @return void
	 */
	public function create( $inputs );

	/**
	 * Remove the specified resource from tasks table.
	 *
	 * @param  integer  $id
	 * @return void
	 */	
	public function delete( $id );

	/**
	 * Change status of the specified resource in tasks table.
	 *
	 * @param  array  $inputs
	 * @return void
	 */	
	public function changeStatus( $inputs );
}