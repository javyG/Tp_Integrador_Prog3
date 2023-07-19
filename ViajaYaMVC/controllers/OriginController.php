<?php 
class OriginController {
	private $model;
	
	public function __construct() {
		$this->model = new OriginModel();
	}

	public function create( $origin_data = array() ){
			return $this->model->create($origin_data);
	   }
	   public function read($origin_id = ''){
			return $this->model->read($origin_id);
	   }
	   public function search($search = ''){
			return $this->model->search($search);
	   }
	   public function update( $origin_data = array() ){
			return $this->model->update($origin_data);
	   }
	   public function delete($origin_id = ''){
			return $this->model->delete($origin_id);
	   }
	/*public function __destruct() {
		unset($this);
	}*/
}