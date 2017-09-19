
 <?php
 
if(!defined('RESTRICTED'))exit('No direct script access allowed!');
	include_once 'apps/model/class.auth.php';
	

	if (isset($_POST['btn_insertBio_auth'])) 
	{

		$name_category   = $_POST['name_category'];
	
		if ($name_category == "") {
			$error[] 	= "Name category must be filled!";
		}
		else 
		{
			try 
			{
				if ($auth->insertBio($name_category)) {
					
				}
				$auth->redirect($baseUrl . 'index.php?page=authh&action=category');
			} 
			catch (Exception $e) 
			{
				echo $e->getMessage();
			}
		}
	}
	
	
	include 'apps/views/layouts/footer.view.php';
	include 'apps/views/admin/category.php';
?>



 

 

 
	

