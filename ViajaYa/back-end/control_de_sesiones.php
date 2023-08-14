<?php
require_once('UsersModel.php');
class Control_Sesiones{
	private $session;

	public function __construct() {
		$this->session = new UsersModel();
		
	}
	public function login($users, $passw){
		return $this->session->validate_user($users, $passw);

	}
	public function logout() {
		session_start();
		session_destroy();
		header('Location: ./');
	}

	/*public function __destruct() {
		unset($session);
	}*/
}
?>