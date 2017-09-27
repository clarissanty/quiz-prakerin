<?php 
 
 include_once 'class.connection.php';
/**
* Buatlah source register dan login disini dan dari function itu kalian panggil di file yang berada di folder auth/
*/

class Auth extends Connection
{
	
	
	public function create($name, $email, $username, $password){		
		$result = $this->db->query(
		"INSERT INTO tbl_admin(name, email, username, password) VALUES('{$name}', '{$email}', '{$username}', '{$password}')");
	}

	public function login($username, $password){		
		$result = $this->db->query(
		"SELECT * FROM tbl_admin WHERE username='$username' AND password='$password' ");
	}	
	public function insertBio($name_category){
        $result = $this->db->query(
        	"INSERT INTO tbl_category(name_category) VALUES('{$name_category}')");
        }
	public function insertPost($title_post, $content, $name_category){
        $result = $this->db->query(
        	"INSERT INTO tbl_post(title_post, content, name_category) VALUES('{$title_post}', '{$content}', '{$name_category}')");
        }
}

?>
