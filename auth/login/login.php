
 <?php
 if(!defined('RESTRICTED'))exit('No direct script access allowed!');
	include_once 'apps/model/class.auth.php';

	$auth 	= new Auth();

	if (isset($_POST['btn_login_auth'])) {
		$username 	= $_POST['username'];
		$password	= strip_tags(md5($_POST['password']));
	
		if ($username == "") {
			$error[] 	= "Username must be filled!";
		}
		elseif ($password == "") {
			$error[] 	= "Password must be filled";
		}
		else {
			try {
				if ($auth->login($username, $password)) {
					
				}
				
				$auth->redirect($baseUrl . 'index.php?page=auth&action=admin');
				
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
	}

	
	include 'apps/views/auth/login/index.view.php';

?>
	

 

 
	