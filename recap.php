<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/f937b853a3.js" crossorigin="anonymous"></script>
	<title> Récapitulatif des produits </title>
	<link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css>

</head>
<nav class="d-flex flex-row justify-content-end" class="navbar-light" style="background-color: #e3f2fd;">
	<a class="p-2 text-grey" style="text-decoration:none" href="index.php">Ajout Article</a>
	<a class="p-2 text-grey" style="text-decoration:none" href="recap.php"> <i class="fa-solid fa-cart-shopping"></i> </a>
</nav>

<body>
	<?php
	if (isset($_SESSION['message'])) {

		echo $_SESSION['message'];
		unset($_SESSION['message']);
	} ?>
	<?php //var_dump($_SESSION);

	if (!isset($_SESSION['products']) || empty($_SESSION['products'])) {
		echo "<p> Aucun produit en session... </p>";
	} else {
		echo '<table class="table table-striped table-bordered shadow-lg p-3 mb-5 bg-white rounded" style="width : 60%; margin: auto">
		<thead>
		<tr>
		<th scope="col ">#</th>
		<th scope="col class="col-md-1">Nom</th>
		<th scope="col  class="col-md-1">Prix</th>
		<th scope="col class="col-md-1">Quantité</th>
		<th scope="col ">Total</th>',
		"</tr>",
		"</thead>",
		"<tbody>";
		$totalGeneral = 0;
		foreach ($_SESSION['products'] as $index => $product) {
			echo "<tr>",
			"<td>" . $index . "</td>",
			"<td>" . $product["name"] . "</td>",
			"<td>" . number_format($product["price"], 2, ",", "&nbsp;") . "&nbsp;€</td>",
			"<td><a href='traitement.php?action=minusQtt&index=" . $index . "'>-</a>" . $product["qtt"] . "<a href='traitement.php?action=addQtt&index=" . $index . "'>+</a>" . "<a href='traitement.php?action=deleteQtt&index=" . $index . "'><i class='fa-solid fa-trash'></i></a></td>",
			"<td>" . number_format($product["total"], 2, ",", "&nbsp;") . "&nbsp;€</td>",
			"</tr>";
			$totalGeneral += $product["total"];
		}
		echo "<tr>",
		"<td colspan=4>Total général : </td>",
		"<input type="submit" name="submit" value="Annuler le pannier" class="p-3 mb-2 btn btn-outline-danger">",
		"<td><strong>" . number_format($totalGeneral, 2, ",", "&nbsp;") . "&nbsp;€</strong></td>",
		
		"</tbody>",
		"</table>";
	}
	?>
</body>

</html>