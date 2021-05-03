<?php

/**
 * 
 */
class HomeController
{
	
	function index()
	{
		require __DIR__."/../view/salle/salle.php";
	}

	function groupe()
	{
		require __DIR__."/../view/groupe/groupe.php";
	}

	function matiere()
	{
		require __DIR__."/../view/matiere/matiere.php";
	}
}