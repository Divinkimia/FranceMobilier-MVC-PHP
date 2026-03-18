<?php
	if (!empty($_GET['page']))
	{
		$page=$_GET['page'];
	}
	else
	{
		$page="accueil";
	}
	switch ($page)
	{
		case "accueil":
			require_once "controleurs/c_consulterProduits.php";
			$controleur=new c_consulterProduits();
			$controleur->action_accueil();
			break;
		case "listePdt":
			require_once "controleurs/c_consulterProduits.php";
			$controleur=new c_consulterProduits();
			$controleur->action_listeProduits($_GET['categ'], $_GET['gamme']);
			break;
		default:
			require_once "controleurs/c_consulterProduits.php";
			$controleur=new c_consulterProduits();
			$controleur->action_accueil();
			break;
	}	
?>