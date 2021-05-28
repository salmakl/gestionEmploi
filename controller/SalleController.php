<?php
require __DIR__.'/../model/salle.php';
class SalleController
{

	function index()
	{
		
		session_start();
		if(isset($_SESSION["idadmin"]) && !empty($_SESSION["idadmin"])){
		$salle=new salleModel;
		$table=$salle->SelectAll();
		require __DIR__."/../view/salle/salle.php";}
		else{
			require __DIR__."/../view/login.php";
		}
	}

	function create()
	{
		$salle=new salleModel();
		// $libelle=$_POST['libelle'];
		// $capacite=$_POST['capacite'];
		
		$i=0;
     	 while(isset($_POST['capacite'.$i])){
		$salle->Insert($_POST['libelle'.$i],$_POST['capacite'.$i]);
		$i++;
		  }
	 header('location:http://localhost/gestionEmploi/home');
	}

	function read()
	{
		$salle=new salleModel;
		return $salle->SelectAll();
	}

	function delete($id)
	{
		
		$salle=new salleModel;
	 	$salle->deletesalle($id);
		header('location:http://localhost/gestionEmploi/home');
	}

	function edit($id)
	{
		$salle=new salleModel();
		 $result = $salle->SelectSalle($id);
		require __DIR__."/../view/salle/edit.php";		
	}
	function updateData(){

		$id=$_POST['idSalle'];
		$libelle=$_POST['libelle'];
		$capacite=$_POST['capacite'];
		$salle=new salleModel();
		$salle->update($id,$libelle,$capacite);
		header('location:http://localhost/gestionEmploi/salle');

	}
	
}
