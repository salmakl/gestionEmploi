<?php 
require __DIR__.'/../model/groupe.php';

class GroupeController {

	function index()
	{
		
		session_start();
		if(isset($_SESSION["idadmin"]) && !empty($_SESSION["idadmin"])){
		$groupe=new Groupe;
		$table=$groupe->SelectAll();
		require __DIR__."/../view/groupe/groupe.php";}
		else{
			require __DIR__."/../view/login.php";
		}
	}

	function create()
	{
		$groupe=new groupe();
		$libelleG=$_POST['libelleGroupe'];
		$effectif=$_POST['effectif'];
		$groupe->Insert($libelleG,$effectif);
        // print_r($groupe);
		header('location:http://localhost/gestionEmploi/groupe');
	}

	function read()
	{
		$salle=new groupe;
		return $salle->SelectAll();
	}

	function delete($id)
	{
		
		$groupe=new groupe;
	 	$groupe->deleteGroupe($id);
		 header('location:http://localhost/gestionEmploi/groupe');
	}

	function edit($id)
	{
		$groupe=new groupe();
		 $result = $groupe->SelectGroupById($id);
		require __DIR__."/../view/groupe/edit.php";		
	}
	function updateData(){

		$id=$_POST['idGroupe'];
		$libelle=$_POST['libelleGroupe'];
		$effectif=$_POST['effectif'];
		$groupe=new groupe();
		$groupe->update($id,$libelle,$effectif);
		
		header('location:http://localhost/gestionEmploi/groupe');

	}
	
}

