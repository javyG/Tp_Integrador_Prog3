<?php 
class ToursController {
	private $model;
	
	public function __construct() {
		$this->model = new ToursModel();
	}

	public function create( $tours_data = array() ){
			return $this->model->create($tours_data);
	   }
	   public function read($tours_id = ''){
			return $this->model->read($tours_id);
	   }
	   public function search($search = ''){
			return $this->model->search($search);
	   }
	   public function update( $tours_data = array() ){
			return $this->model->update($tours_data);
	   }
	   public function delete($tours_id = ''){
			return $this->model->delete($tours_id);
	   }

	/*public function __destruct() {
		unset($this);
	}*/
}