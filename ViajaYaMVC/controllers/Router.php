<?php 
class Router {
	public $route;

	public function __construct($route) {
		//http://php.net/manual/es/function.session-start.php
		//http://php.net/manual/es/session.configuration.php
		//buscar opciones en el PHP.INI
		$session_options = array(
			'use_only_cookies' => 1,
			'auto_start' => 1,
			'read_and_close' => true
		);

		if( !isset($_SESSION) )  session_start($session_options);

		if( !isset($_SESSION['ok']) )  $_SESSION['ok'] = false;


		if($_SESSION['ok']) {
			//Aquí va toda la programación de nuestra webapp
			$this->route = isset($_GET['r']) ? $_GET['r'] : 'home';
			
			$controller = new ViewController();

			switch ($this->route) {
				case 'home':
					$controller->load_view('home');
					break;

				case 'booking':
					if( !isset( $_POST['r'] ) )  $controller->load_view('booking');
					else if( $_POST['r'] == 'booking-add' )  $controller->load_view('booking-add');
					else if( $_POST['r'] == 'booking-edit' )  $controller->load_view('booking-edit');
					else if( $_POST['r'] == 'booking-delete' )  $controller->load_view('booking-delete');
					else if( $_POST['r'] == 'booking-search' )  $controller->load_view('booking-search');
					break;

				case 'usuarios':
					if( !isset( $_POST['r'] ) )  $controller->load_view('users');
					else if( $_POST['r'] == 'user-add' )  $controller->load_view('user-add');
					else if( $_POST['r'] == 'user-edit' )  $controller->load_view('user-edit');
					else if( $_POST['r'] == 'user-delete' )  $controller->load_view('user-delete');
					break;

				case 'origen':
					if( !isset( $_POST['r'] ) )  $controller->load_view('status');
					else if( $_POST['r'] == 'origin-add' )  $controller->load_view('origin-add');
					else if( $_POST['r'] == 'origin-edit' )  $controller->load_view('origin-edit');
					else if( $_POST['r'] == 'origin-delete' )  $controller->load_view('origin-delete');
					break;

				case 'salir':
					$user_session = new SessionController();
					$user_session->logout();
					break;
				
				default:
					$controller->load_view('error404');
					break;
			}
		} else {
			if( !isset($_POST['user']) && !isset($_POST['pass']) ) {
				//mostrar un formulario de autenticación
				$login_form = new ViewController();
				$login_form->load_view('login');
			}
			else {
				$user_session = new SessionController();
				$session = $user_session->login($_POST['user'], $_POST['pass']);

				if( empty($session) ) {
					//echo 'El usuario y el password son incorrectos';
					$login_form = new ViewController();
					$login_form->load_view('login');
					header('Location: ./?error= Usuario ' . $_POST['user'] . ' o clave incorrecta');
				} else {
					//echo 'El usuario y el password son correctos';
					//var_dump($session);
					
					$_SESSION['ok'] = true;

					foreach ($session as $row) {
						$_SESSION['name'] = $row['name'];
						$_SESSION['mail'] = $row['mail'];
						$_SESSION['user'] = $row['user'];
						$_SESSION['pass'] = $row['pass'];
						$_SESSION['role'] = $row['role'];
					}

					header('Location: ./');
				}
			}
		}
	}

	/*public function __destruct() {
		unset($this);
	}*/
}