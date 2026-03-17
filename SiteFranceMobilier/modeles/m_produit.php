<?php
	require_once "m_generique.php";
	require_once "metiers/Produit.php";
	class m_produit extends m_generique
	{
		public function GetListe($categ)
		{
			$resultat=array();
			$this->connexion();
			if ($categ==0)
			{
				$req="select * from produit";
			}
			else
			{
				$req="select * from produit where pro_categorie=".$categ;
			}
			$res=mysqli_query($this->GetCnx(),$req);
			$ligne=mysqli_fetch_assoc($res);
			while ($ligne)
			{
				$produit=new Produit($ligne["pro_id"],$ligne["pro_reference"],$ligne["pro_designation"],$ligne["pro_prixTTC"],$ligne["pro_photo"]);
				$resultat[]=$produit;
				$ligne=mysqli_fetch_assoc($res);
			}
			$this->deconnexion();
			return $resultat;
		}
	}
?>