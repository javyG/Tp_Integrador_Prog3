<?php 
	require_once('UsersModel.php');
class ControlUsuarios{
	private $modelo;

	public function __construct() {
		$this->modelo = new UsersModel();
	}

	public function create( $user_data = array() ){
			return $this->modelo->create($user_data);
	   }
	   public function read($user_id = ''){
			return $this->modelo->read($user_id);
	   }
	   public function search($search = ''){
			return $this->modelo->search($search);
	   }
	   public function update( $user_data = array() ){
			return $this->modelo->update($user_data);
	   }
	   public function delete($user_id = ''){
			return $this->modelo->delete($user_id);
	   }
	 	/*public function __destruct() {
			unset($this);
	   }*/
}