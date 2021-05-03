<?php

require __DIR__.'/../model/salle.php';
session_start();

class SalleController
{

    function index()
    {
        
        if(!empty($_SESSION["id"]))
        {
            
            require_once __DIR__."/../view/salle.php";
        }else
        {
            header('location: http://localhost/gestionEmploi/');
        }
        
    }

	function create()
	{
		$salle=new salleModel();
		$libelle=$_POST['libelle'];
		$capacite=$_POST['capacite'];
		$salle->Insert($libelle,$capacite);
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
		header('location:http://localhost/gestionEmploi/home');

	}
	
}
