<?php
	require_once "modeles/m_categorie.php";
	class c_menu
	{
		// modèle utilisé pour obtenir les données du menu
		private $modele_categorie;
		public function __construct()
		{
			$this->modele_categorie=new m_categorie();
		}
		public function FillData(&$data)
		{
			$data['lesCategories']=$this->modele_categorie->GetListe();
		}
	}
?>