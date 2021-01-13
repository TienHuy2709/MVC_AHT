<?php 

	namespace mvc\Core;

	/*Tao khuan mau*/
	interface ResourceModelInterface
	{
	 	/*Khoi tao cac ham co dinh */
	 	public function _init($table, $id, $model);
	 	public function save($model);
	 	public function delete($model);
	}

 ?>