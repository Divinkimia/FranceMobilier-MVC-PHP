<aside class="col-12 col-md-3 col-lg-2 bg-light p-4">

	<!-- Boutons de navigation -->
    <div class="mb-4">
        <a href="index.php?page=accueil" class="btn btn-outline-success w-100 mb-2">
            Accueil
        </a>
    </div>

	<!-- Recherche des produits -->
    <h5 class="mb-4">Meubles</h5>

    <form action="index.php"method="get">
        <!-- Catégorie -->
        <div class="mb-3">
            <label for="categorie" class="form-label">Catégorie</label>
            <select name="categ" id="categ" class="form-select">
                <option selected value="0">Toutes les catégories</option>
				<?php
				foreach ($this->data['lesCategories'] as $uneCategorie)
				{
					echo '<option value="'.$uneCategorie->GetId().'">'.$uneCategorie->GetLibelle().'</option>';
				}
				?>       
            </select>
        </div>

		<input type="hidden" name="page" value="listePdt" />		
        <button type="submit" class="btn btn-warning w-100">
            Rechercher
        </button>
    </form>
</aside>