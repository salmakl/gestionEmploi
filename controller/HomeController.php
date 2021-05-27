<?php
// require_once __DIR__."/../model/salle.php";
// require_once __DIR__."/../model/groupe.php";

/**
 * 
 */
session_start();
class HomeController
{
	
	function index()
	{
		if(isset($_SESSION["idadmin"]) && !empty($_SESSION["idadmin"])){
		require __DIR__."/../view/salle/salle.php";}
		else{
			require __DIR__."/../view/login.php";
		}
	}

	function groupe()
	{
		if(isset($_SESSION["idadmin"]) && !empty($_SESSION["idadmin"])){
		require __DIR__."/../view/groupe/groupe.php";}
		else{require __DIR__."/../view/login.php";}
	}

	function matiere()
	{
		if(isset($_SESSION["idadmin"]) && !empty($_SESSION["idadmin"])){
		require __DIR__."/../view/matiere/matiere.php";}
		else{require __DIR__."/../view/login.php";}
	}
	function reserver()
	{
		// require_once __DIR__."/../model/salle.php";
		// require_once __DIR__."/../model/groupe.php";
		// $salle=new salleModel();
        // $resSalle=$salle->SelectAll();
		// // print_r($resSalle);
        // $groupe=new Groupe();
        // $resGroupe=$groupe->SelectAll();
		// // print_r($resGroupe);
		// require_once __DIR__."/../view/user/reserver.php";
		if(isset($_SESSION["iduser"]) && !empty($_SESSION["iduser"]))
		{
			header("location:http://localhost/gestionEmploi/user/");
		}
			else{
				require __DIR__."/../view/login.php";
			}
	}
	// function logout()
	// {
	// 	// header('location:logout.php');
	// 	require_once __DIR__."/logout.php";
	// }
	
	function signup()
	{
		require_once __DIR__."/../model/matiere.php";
		$matiere=new matiere;
		$result=$matiere->SelectAll();
		require __DIR__."/../view/user/createAccount.php";
	}
}