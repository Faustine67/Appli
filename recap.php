<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title> Récapitulatif des produits </title>
	<link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css>

</head>
<nav class="d-flex flex-row justify-content-end" class="navbar-light" style="background-color: #e3f2fd;">
	<a class="p-2" href="index.php">Ajout Article</a>
	<a class="p-2" href="recap.php"> Mon Panier </a>
</nav>

<body>
	<?php //var_dump($_SESSION);

	if (!isset($_SESSION['products']) || empty($_SESSION['products'])) {
		echo "<p> Aucun produit en session... </p>";
	} else {
		echo '<table class="table table-striped ">
		<thead>
		<tr>
		<th scope="col">#</th>
		<th scope="col">Nom</th>
		<th scope="col">Prix</th>
		<th scope="col">Quantité</th>
		<th scope="col">Total</th>',
		"</tr>",
		"</thead>",
		"<tbody>";
		$totalGeneral = 0;
		foreach ($_SESSION['products'] as $index => $product) {
			echo "<tr>",
			"<td>" . $index . "</td>",
			"<td>" . $product["name"] . "</td>",
			"<td>" . number_format($product["price"], 2, ",", "&nbsp;") . "&nbsp;€</td>",
			"<td>" . $product["qtt"] . "</td>",
			"<td>" . number_format($product["total"], 2, ",", "&nbsp;") . "&nbsp;€</td>",
			"</tr>";
			$totalGeneral += $product["total"];
		}
		echo "<tr>",
		"<td colspan=4>Total général : </td>",
		"<td><strong>" . number_format($totalGeneral, 2, ",", "&nbsp;") . "&nbsp;€</strong></td>",
		"</tr>",
		"</tbody>",
		"</table>";
	}
	?>
</body>

</html>