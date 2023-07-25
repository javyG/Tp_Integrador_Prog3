<?php 
class DestinyController {
	private $model;
	
	public function __construct() {
		$this->model = new DestinyModel();
	}

	public function create( $destiny_data = array() ){
			return $this->model->create($destiny_data);
	   }
	   public function read($destiny_id = ''){
			return $this->model->read($destiny_id);
	   }
	   public function search($search = ''){
			return $this->model->search($search);
	   }
	   public function update( $destiny_data = array() ){
			return $this->model->update($destiny_data);
	   }
	   public function delete($destiny_id = ''){
			return $this->model->delete($destiny_id);
	   }

	/*public function __destruct() {
		unset($this);*/
	}
