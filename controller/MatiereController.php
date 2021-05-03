<?php 
require __DIR__.'/../model/matiere.php';

class MatiereController {


	function create()
	{
		$matiere=new matiere();
		$libelleM=$_POST['libelleMatiere'];
		$matiere->Insert($libelleM);
        // print_r($matiere);
		header('location:http://localhost/gestionEmploi/home/matiere');
	}

	function read()
	{
		$matiere=new Matiere;
		return $matiere->SelectAll();
	}

	function delete($id)
	{
		
		$matiere=new Matiere;
	 	$matiere->deleteMatiere($id);
         header('location:http://localhost/gestionEmploi/home/matiere');
	}

	function edit($id)
	{
		$matiere=new Matiere();
		 $result = $matiere->SelectMatiereById($id);
		require __DIR__."/../view/matiere/edit.php";		
	}
	function updateData(){

		$id=$_POST['idMatiere'];
		$libelle=$_POST['libelleMatiere'];
		$matiere=new Matiere();
		$matiere->update($id,$libelle);
		header('location:http://localhost/gestionEmploi/home/matiere');

	}
	
}

