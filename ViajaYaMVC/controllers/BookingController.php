<?php 
class BookingController {
	private $model;
	
	public function __construct() {
		$this->model = new BookingModel();
	}

	public function create( $booking_data = array() ){
			return $this->model->create($booking_data);
	   }
	   public function read($booking_id = ''){
			return $this->model->read($booking_id);
	   }
	   public function search($search = ''){
			return $this->model->search($search);
	   }
	   public function update( $booking_data = array() ){
			return $this->model->update($booking_data);
	   }
	   public function delete($booking_id = ''){
			return $this->model->delete($booking_id);
	   }

	/*public function __destruct() {
		unset($this);
	}*/
}