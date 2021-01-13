<?php 

	namespace mvc\Models;
	
	use mvc\Models\TaskResourceModel;
	
	class TaskRepository
	{
		protected $taskRe;
		public function __construct()
		{
			$this->taskRe = new TaskResourceModel();
		}

		/*Tao ham lay tat ca du lieu cua bang*/
		public function getAll($model)
		{
			/*Tra ve ham all trong TaskResourceModel*/
			return $this->taskRe->all($model);
		}

		public function get($id){
			return $this->taskRe->find($id);
		}

		public function delete($model)
		{
			return $this->taskRe->delete($model);
		}

		public function add($model){
			return $this->taskRe->save($model);
		}

		public function update($model){
			return $this->taskRe->save($model);
		}

	}

 ?>