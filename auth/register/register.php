<?php 
if(!defined('RESTRICTED'))exit('No direct script access allowed!');
	
	

	if (isset($_POST['btn_create_auth'])) 
	{
		$name 		= $_POST['name'];
		$email	    = $_POST['email'];
		$username 	= $_POST['username'];
		$password	= strip_tags(md5($_POST['password']));
	
		if ($name == "") {
			$error[] 	= "Name must be filled!";
		}
		else if ($email == "") {
			$error[] 	= "Email must be filled";
		}
		else if ($username == "") {
			$error[] 	= "Username must be filled";
		}
		else if ($password == "") {
			$error[] 	= "Password must be filled";
		}
		else 
		{
			try 
			{
				if ($auth->create($name, $email, $username, $password)) {
					
				}
				$auth->redirect($baseUrl . 'index.php?page=auth&action=login');
			} 
			catch (Exception $e) 
			{
				echo $e->getMessage();
			}
		}
	}
	
	
	include 'apps/views/auth/register/index.view.php';

	
 ?>

 