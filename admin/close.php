<?php
	if(!defined('RESTRICTED'))exit('No direct script access allowed!');

	include_once 'apps/model/class.auth.php';

	$auth 	= new Auth();

	include 'apps/views/layouts/header.view.php';
	include 'apps/views/auth/login/index.view.php';
	include 'apps/views/auth/register/index.view.php';
	include 'apps/views/index.view.php';
	include 'apps/views/layouts/menu.view.php';
	include 'apps/views/layouts/footer.view.php';
	
 