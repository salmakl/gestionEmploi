<?php
	
require __DIR__.'/../model/admin.php';
/**
 * 
 */
class LoginController
{
	public function index()
	{
		require __DIR__."/../view/login.php";
	}
    function loginPage()
	{
 
        
        if(isset($_POST['email']) && isset($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $admin = new admin();
            $myAdmin = $admin->check_login($email, $password);
            
            if(!empty($myAdmin)){
                
                session_start();
               $_SESSION["id"]=$myAdmin['idAdmin'];
                // require __DIR__."/../view/salle.php";
                header('location:http://localhost/gestionEmploi/home/');
            }
            else{
                
                require_once __DIR__."/../view/login.php";
                echo "<script> alert('les informations incorrect')</script>";
            }
        }else{
            require_once __DIR__."/../view/login.php";
        }
	}
}