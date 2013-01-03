<!DOCTYPE HTML>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>SeBio</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<!--Palette de couleur
	#945457
	#FFFFFF
	#A7C539
	#50B5C5
	#A19253
-->
<body>
	<header class="clearfix">
		<div class="centrer">
			<h1 id="titre"><img src="./img/sebio.png" alt="Logo SeBio"/></h1>
			<section>
				<p><a href="#">Inscrivez-vous</a> ou <a href="#">Connectez-vous</a></p>
			</section>
			<div id="panier">
				<h1>Mon panier</h1>
				<p>Nombre d'articles&nbsp;: 0</p>
				<p>Prix total du panier&nbsp;: 0,00€</p>
				<p><a href="#">Voir le panier en détail</a></p>
			</div>
			<nav>
				    <!-- <ul class="nav nav-tabs" id="myTab">
				    <li class="active"><a href="index.php" data-toggle="tab">Accueil</a></li>
				    <li><a href="#tab1" data-toggle="tab">Bons Plans</a></li>
				    <li><a href="#tab2" data-toggle="tab">Bébés et enfants</a></li>
				    </ul>
				    <div class="tab-content">
				    <div class="tab-pane" id="tab1">
				    	<ul>
							<li>Nouveautés</li>
							<li>Articles en promotion</li>
							<li>Articles en liquidation</li>
							<li>Chèques cadeaux</li>
						</ul>
				    </div>
				    <div class="tab-pane" id="tab2">
				    	<ul>
							<li>Grossesse et allaitement</li>
							<li>Bébé et Enfant</li>
							<li>Couches</li>
							<li>Aliments bio pour bébé</li>
							<li>Liste de naissance</li>
						</ul>
				    </div>
				    </div> -->

				<ul>
					<li class="lvl1">
						<h2>Bons Plans</h2>
						<ul>
							<li>Nouveautés</li>
							<li>Articles en promotion</li>
							<li>Articles en liquidation</li>
							<li>Chèques cadeaux</li>
						</ul>
					</li>
					<li class="lvl1">
						<h2>Bébés et enfants</h2>
						<ul>
							<li>Grossesse et allaitement</li>
							<li>Bébé et Enfant</li>
							<li>Couches</li>
							<li>Aliments bio pour bébé</li>
							<li>Liste de naissance</li>
						</ul>
					</li>
					<li class="lvl1">
						<h2>Bien-être</h2>
						<ul>
							<li>Hygiène et Soin</li>
							<li>Aromathérapie</li>
							<li>Fleurs de Bach</li>
							<li>Santé et bien-être</li>
						</ul>
					</li>
					<li class="lvl1">
						<h2>Mode</h2>
						<ul>
							<li>Vêtements</li>
							<li>Tissus</li>
							<li>La queue du chat hiver 12/13</li>
						</ul>
					</li>
					<li class="lvl1">
						<h2>Maison et Loisirs</h2>
						<ul>
							<li>Papeterie</li>
							<li>Livres</li>
							<li>Jeux et jouets</li>
							<li>La maison au naturel</li>
							<li>Produits d'entretien</li>
						</ul>
					</li>
					<li class="lvl1">
						<h2>Services</h2>
						<ul>
							<li>Location de porte-bébés</li>
							<li>Nos ateliers nature</li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<section class="centrer clearfix">
		<section id="nouveautes" class="clearfix">
			<h1>Nos nouveautés</h1>
			<div class="produit">
				<h1>Produit n°1</h1>
				<img src="http://placehold.it/170x150" alt="image de remplacement" class="img-rounded"/>
				<h2 id="prix">10,90&nbsp;€</h2>
				<div class="quantite input-prepend input-append">
					<span class="add-on">Quantité&nbsp;:</span>
					<input type="text" class="input-mini" maxlength="3" value="1"/>
					<button class="btn" type:"button">-</button>
					<button class="btn" type:"button">+</button>
				</div>
				<button class="submit btn btn-warning" type:"submit">Ajouter au panier</button>
			</div>
			<div class="produit">
				<h1>Produit n°2</h1>
				<img src="http://placehold.it/170x150" alt="image de remplacement" class="img-rounded"/>
				<h2 id="prix">10,90&nbsp;€</h2>
				<div class="quantite input-prepend input-append">
					<span class="add-on">Quantité&nbsp;:</span>
					<input type="text" class="input-mini" maxlength="3" value="1"/>
					<button class="btn" type:"button">-</button>
					<button class="btn" type:"button">+</button>
				</div>
				<button class="submit btn btn-warning" type:"submit">Ajouter au panier</button>
			</div>
			<div class="produit">
				<h1>Produit n°3</h1>
				<img src="http://placehold.it/170x150" alt="image de remplacement" class="img-rounded"/>
				<h2 id="prix">10,90&nbsp;€</h2>
				<div class="quantite input-prepend input-append">
					<span class="add-on">Quantité&nbsp;:</span>
					<input type="text" class="input-mini" maxlength="3" value="1"/>
					<button class="btn" type:"button">-</button>
					<button class="btn" type:"button">+</button>
				</div>
				<button class="submit btn btn-warning" type:"submit">Ajouter au panier</button>
			</div>
			<div class="produit">
				<h1>Produit n°4</h1>
				<img src="http://placehold.it/170x150" alt="image de remplacement" class="img-rounded"/>
				<h2 id="prix">10,90&nbsp;€</h2>
				<div class="quantite input-prepend input-append">
					<span class="add-on">Quantité&nbsp;:</span>
					<input type="text" class="input-mini" maxlength="3" value="1"/>
					<button class="btn" type:"button">-</button>
					<button class="btn" type:"button">+</button>
				</div>
				<button class="submit btn btn-warning" type:"submit">Ajouter au panier</button>
			</div>
		</section>
		<section id="promos" class="clearfix">
			<h1>Nos promotions</h1>
			<div class="produit">
				<h1>Produit n°1</h1>
				<img src="http://placehold.it/170x150" alt="image de remplacement" class="img-rounded"/>
				<h2 id="prix">10,90&nbsp;€</h2>
				<div class="quantite input-prepend input-append">
					<span class="add-on">Quantité&nbsp;:</span>
					<input type="text" class="input-mini" maxlength="3" value="1"/>
					<button class="btn" type:"button">-</button>
					<button class="btn" type:"button">+</button>
				</div>
				<button class="submit btn btn-warning" type:"submit">Ajouter au panier</button>
			</div>
			<div class="produit">
				<h1>Produit n°2</h1>
				<img src="http://placehold.it/170x150" alt="image de remplacement" class="img-rounded"/>
				<h2 id="prix">10,90&nbsp;€</h2>
				<div class="quantite input-prepend input-append">
					<span class="add-on">Quantité&nbsp;:</span>
					<input type="text" class="input-mini" maxlength="3" value="1"/>
					<button class="btn" type:"button">-</button>
					<button class="btn" type:"button">+</button>
				</div>
				<button class="submit btn btn-warning" type:"submit">Ajouter au panier</button>
			</div>
			<div class="produit">
				<h1>Produit n°3</h1>
				<img src="http://placehold.it/170x150" alt="image de remplacement" class="img-rounded"/>
				<h2 id="prix">10,90&nbsp;€</h2>
				<div class="quantite input-prepend input-append">
					<span class="add-on">Quantité&nbsp;:</span>
					<input type="text" class="input-mini" maxlength="3" value="1"/>
					<button class="btn" type:"button">-</button>
					<button class="btn" type:"button">+</button>
				</div>
				<button class="submit btn btn-warning" type:"submit">Ajouter au panier</button>
			</div>
			<div class="produit">
				<h1>Produit n°4</h1>
				<img src="http://placehold.it/170x150" alt="image de remplacement" class="img-rounded"/>
				<h2 id="prix">10,90&nbsp;€</h2>
				<div class="quantite input-prepend input-append">
					<span class="add-on">Quantité&nbsp;:</span>
					<input type="text" class="input-mini" maxlength="3" value="1"/>
					<button class="btn" type:"button">-</button>
					<button class="btn" type:"button">+</button>
				</div>
				<button class="submit btn btn-warning" type:"submit">Ajouter au panier</button>
			</div>
		</section>
		<section id="liquidation">
			<h1>Nos liquidations</h1>
			<div class="produit">
				<h1>Produit n°1</h1>
				<img src="http://placehold.it/170x150" alt="image de remplacement" class="img-rounded"/>
				<h2 id="prix">10,90&nbsp;€</h2>
				<div class="quantite input-prepend input-append">
					<span class="add-on">Quantité&nbsp;:</span>
					<input type="text" class="input-mini" maxlength="3" value="1"/>
					<button class="btn" type:"button">-</button>
					<button class="btn" type:"button">+</button>
				</div>
				<button class="submit btn btn-warning" type:"submit">Ajouter au panier</button>
			</div>
			<div class="produit">
				<h1>Produit n°2</h1>
				<img src="http://placehold.it/170x150" alt="image de remplacement" class="img-rounded"/>
				<h2 id="prix">10,90&nbsp;€</h2>
				<div class="quantite input-prepend input-append">
					<span class="add-on">Quantité&nbsp;:</span>
					<input type="text" class="input-mini" maxlength="3" value="1"/>
					<button class="btn" type:"button">-</button>
					<button class="btn" type:"button">+</button>
				</div>
				<button class="submit btn btn-warning" type:"submit">Ajouter au panier</button>
			</div>
			<div class="produit">
				<h1>Produit n°3</h1>
				<img src="http://placehold.it/170x150" alt="image de remplacement" class="img-rounded"/>
				<h2 id="prix">10,90&nbsp;€</h2>
				<div class="quantite input-prepend input-append">
					<span class="add-on">Quantité&nbsp;:</span>
					<input type="text" class="input-mini" maxlength="3" value="1"/>
					<button class="btn" type:"button">-</button>
					<button class="btn" type:"button">+</button>
				</div>
				<button class="submit btn btn-warning" type:"submit">Ajouter au panier</button>
			</div>
			<div class="produit">
				<h1>Produit n°4</h1>
				<img src="http://placehold.it/170x150" alt="image de remplacement" class="img-rounded"/>
				<h2 id="prix">10,90&nbsp;€</h2>
				<div class="quantite input-prepend input-append">
					<span class="add-on">Quantité&nbsp;:</span>
					<input type="text" class="input-mini" maxlength="3" value="1"/>
					<button class="btn" type:"button">-</button>
					<button class="btn" type:"button">+</button>
				</div>
				<button class="submit btn btn-warning" type:"submit">Ajouter au panier</button>
			</div>
		</section>
	</section>
	<footer>
		<p class="centrer"><a href="#">Annonce Légale</a> - <a href="#">Conditions générales de vente</a></p>
	</footer>
	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/bootstrap.js"></script>
	<script type="text/javascript" src="./js/bootstrap-tab.js"></script>
	<script type="text/javascript" src="./js/script.js"></script>
</body>
</html>