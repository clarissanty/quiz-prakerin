
<?php
    define('RESTRICTED', 1);

    //Ensure that a session exists (just in case)
    if (!session_id())
    {
        session_start();
    }

    require 'apps/config/app.php';
    require 'apps/model/class.auth.php';
    require_once 'apps/model/class.connection.php';

    $auth   = new Auth();
    $connect = new Connection();

    //here our routes
    $page   = (!empty($_GET['page'])) ? $_GET['page'] : null;
    $action = (!empty($_GET['action'])) ? $_GET['action'] : null;

    switch ($page)
    {
        case 'auth':
            if ($action == 'login')
            {
                require 'auth/login/login.php';
            }
            elseif ($action == 'register')
            {
                require 'auth/register/register.php';
            }
            elseif ($action == 'admin')
            {
                require 'admin/admin.php';
            }
            elseif ($action == 'post')
            {
                require 'admin/post/post.php'; 
            }
            elseif ($action == 'category')
            {
                require 'admin/category/category.php'; 
            }
            elseif ($action == 'add-post')
            {
                require 'admin/post/add-post.php';
            } 
            elseif ($action == 'add-category')
            {
                require 'admin/category/add-category.php';
            }
            else
            {
                require 'auth/auth.php';
            }
            break;

        

       /* case 'example':
            require 'namafolder/namafile.php';
            break;
            */

        default:
                require 'home.php';
                break;
    }

