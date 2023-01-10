<?php
session_start(); //Function used to create & save the informations in a session



switch ($_GET['action']) {

	case 'addProduct':
		if (isset($_POST['submit'])) { // Limit the access to traitement.php to the HTTP requests that come from the form only
			$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS); // FILTER_SANITIZE_STRING Delete the special characters of a character string 
			$price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION); // FILTER_VALIDETA_FLOAT validate the price if it contains coma (no text) // FILTER_FLAG_ALLOW_FRACTION is add to allow "," or "." for the decimal
			$qtt = filter_input(INPUT_POST, "qtt", FILTER_VALIDATE_INT); // FILTER_VALIDATE_INT will not validate the quantity if it is not an whole number (diferent of 0)

			if ($name && $price && $qtt) { // permet de voir si chaque donnée passe les filtres

				$product = [
					"name" => $name,
					"price" => $price,
					"qtt" => $qtt,
					"total" => $price * $qtt
				];

				$_SESSION['products'][] = $product; // Stock the datas in a session

				$_SESSION['message'] = "<p class ='bg-success text-light'>Le produit " . $product['name'] . " a bien été ajouté au panier</p>";
			} //var_dump( $_SESSION['products']);die;
		}

		header("Location:index.php"); // Send a new form to the user.
		break;

	case 'minusQtt': //decrease the quantity for a product
		if ($_SESSION['products'][$_GET['index']]['qtt'] == 1) {
			header('Location:traitement.php?action=deleteQtt&index=' . $_GET['index']);
			break;
		}
		$_SESSION['products'][$_GET['index']]['qtt']--;

		header("Location:recap.php");
		break;

	case 'addQtt': //increase the quantity for a product
		$_SESSION['products'][$_GET['index']]['qtt']++;
		header("Location:recap.php");
		break;

	case 'deleteQtt': //delete the quantity for a product &indicate a confirmation message
		unset($_SESSION['products'][$_GET['index']]);
		$_SESSION['messageDelete'] = "<p class='error'>Article supprimé du panier";
		$_SESSION['message'] = "<p class ='bg-danger text-light'>Le produit " . $product['name'] . " a bien été supprimé</p>";
		header("Location:recap.php");

		break;
	case 'deleteCart': // delete the entire quantity in the cart
		unset($_SESSION['products'][$_GET['index']]['total']);
			header('Location:recap.php');
		break;
		}


