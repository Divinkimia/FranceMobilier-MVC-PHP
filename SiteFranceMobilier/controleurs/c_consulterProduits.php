<?php
	require_once "c_menu.php";
	require_once "modeles/m_categorie.php";
	require_once "modeles/m_produit.php";    
	require_once "modeles/m_magasin.php";                                                                                                                                                                                                                                                                                                                                                                                                                                                   
	
	class c_consulterProduits
	{
		// sous controleur destiné à fournir les données nécessaires à la vue v_menu.php
		private $controleur_menu;
		// modèles utilisés pour obtenir les données
		private $modele_categorie;
		private $modele_produit;
		private $modele_magasin;
		// tableau associatif contenant les données à transmettre aux vues
		private $data;
		public function __construct()
		{
			$this->data=array();
			$this->controleur_menu=new c_menu();
			$this->modele_categorie=new m_categorie();
			$this->modele_produit=new m_produit();
			$this->modele_magasin=new m_magasin();
			$this->controleur_menu->FillData($this->data);
		}
		public function action_accueil()
		{
			$this->data['lesMagasins']=$this->modele_magasin->GetListe();	// retourne tous les magasins
			require_once "vues/v_accueil.php";
		}
		public function action_listeProduits($idCategorie)
		{
			$this->data['laCategorie']=$this->modele_categorie->GetCateg($idCategorie); 	// retourne null si $idCategorie==0
			$this->data['lesProduits']=$this->modele_produit->GetListe($idCategorie);		// retourne tous les produits si $idCategorie==0
			require_once "vues/v_listePdt.php";
		}
	}
?>