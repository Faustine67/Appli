<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title> Ajout produit </title>
	<!--<link rel="stylesheet" type="text/css" href="style.css"> -->
	<link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css>
</head>
<nav class="d-flex flex-row justify-content-end" class="navbar navbar-light" style="background-color: #e3f2fd;">
	<a class="p-2 text-grey" style="text-decoration:none" href="index.php">Ajout Article</a>
	<a class="p-2 text-grey" style="text-decoration:none" href="recap.php"> Mon Panier </a>
</nav>

<body>
	<span class="align-middle">
		<h1 class="p-3 mb-2 bg-info text-white"> Ajouter un produit </h1>
	</span>
	<form action="traitement.php" method="post"> <!-- "action" indicate the form target, the file to reach when the user will send the form -->
		<p>
			<!-- <form class ="main-style"> -->
			<label class="p-3 mb-2 form-label">
				Nom du produit:
				<input type="text" name="name" id="product-name" class="form-control">
			</label>
		</p>
		<p>
			<label class="p-3 mb-2 form-label">
				Prix du produit:
				<input type="number" step="any" name="price" id="price-name" class="form-control">
			</label>
		</p>
		<p>
			<label class="p-3 mb-2 form-label">
				Quantité désirée:
				<input type="number" name="qtt" value="1" id="quantity-name" class="form-control">
			</label>
		</p>
		<p>
			<input type="submit" name="submit" value="Ajouter le produit" class="p-3 mb-2 btn btn-outline-info"></button>
		</p>
	</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>