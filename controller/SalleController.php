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
		require_once __DIR__.'/../view/salle/create.php';
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
	}

	function edit($id)
	{
		$salle=new salleModel();
		 $result = $salle->SelectSalle($id);
		
		//  	$id='';
		// 	$libelle='';
		// 	$capacite='';
		// 	foreach($result as $row){
		// 	$id=$row['idSalle'];
		// 	$libelle=$row['libelle'];
		// 	$capacite=$row['capacite'];
		// 	}
		// header('location:http://localhost/gestionEmploi/edit.php');
		//header('location:http://localhost/gestionEmploi/view/salle/edit.php');
		require __DIR__."/../view/salle/edit.php";
		// require_once __DIR__."/../view/salle/salle.php";
		
	}

}
