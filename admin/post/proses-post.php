
 <?php
 
if(!defined('RESTRICTED'))exit('No direct script access allowed!');
	
	

	if (isset($_POST['btn_create_auth'])) 
	{
		$title_post = $_POST['title'];
		$content    = $_POST['posting'];
		$category   = $_POST['category'];
	
		if ($title_post == "") {
			$error[] 	= "Title post must be filled!";
		}
		else if ($content == "") {
			$error[] 	= "Content must be filled";
		}
		else if ($category == "") {
			$error[] 	= "Category must be filled";
		}
		else 
		{
			try 
			{
				if ($auth->create($title_post, $content, $category)) {
					
				}
				$auth->redirect($baseUrl . 'index.php?page=authh&action=post');
			} 
			catch (Exception $e) 
			{
				echo $e->getMessage();
			}
		}
	}
	
	
	include 'apps/views/layouts/footer.view.php';
?>
	
