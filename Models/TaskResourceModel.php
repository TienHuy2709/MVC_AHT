<?php 

	namespace mvc\Models;

	use mvc\Core\ResourceModel;
	use mvc\Models\TaskModel;

	class TaskResourceModel extends ResourceModel
	{
		/*Khoi tao ham khai bao gia tri _init*/
		public function __construct()
		{
			/*goi thang den ham _init trong ResourceModel*/
			parent::_init('tasks', 'id', new TaskModel);
		}

	}

 ?>