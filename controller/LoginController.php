<?php
	
require __DIR__.'/../model/admin.php';
require __DIR__.'/../model/user.php';
/**
 * 
 */
// session_start();
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
            $user = new User();
            $Admin = $admin->check_login_Admin($email, $password);
            $User= $user->check_login_User($email, $password);
            if(!empty($Admin)){
                
                
               $_SESSION["idadmin"]=$Admin['idAdmin'];
                 print_r($Admin);
                
                header('location:http://localhost/gestionEmploi/salle/');
            }else if(!empty($User))
            {
                
                $_SESSION["iduser"]=$User['idEnseignant'];
                $_SESSION["prenom"]=$User['prenom'];
                 header('location:http://localhost/gestionEmploi/user');
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