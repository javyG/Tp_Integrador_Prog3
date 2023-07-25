<?php 
class UsersController {
	private $model;

	public function __construct() {
		$this->model = new UsersModel();
	}

	public function create( $user_data = array() ){
			return $this->model->create($user_data);
	   }
	   public function read($user_id = ''){
			return $this->model->read($user_id);
	   }
	   public function search($search = ''){
			return $this->model->search($search);
	   }
	   public function update( $user_data = array() ){
			return $this->model->update($user_data);
	   }
	   public function delete($user_id = ''){
			return $this->model->delete($user_id);
	   }
	 /*public function __destruct() {
			unset($this);
	   }*/
}