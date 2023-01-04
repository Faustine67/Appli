<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Ajout produit </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <h1> Ajouter un produit </h1>
        <form action= "traitement.php"method="post">    <!-- "action" indicate the form target, the file to reach when the user will send the form -->
            <p>
                <form class ="main-style">
                <label>
                    Nom du produit:
                    <input type="text" name="name" id="product-name">
                </label>
        </form>
            </p>
            <p>
                <label>
                    Prix du produit:
                    <input type="number" step="any" name="price" id="price-name">
                </label>
            </p>
            <p>
                <label>
                    Quantité désirée:
                    <input type="number" name= "qtt" value="1" id="quantity-name">
                </label>
            </p>
            <p>
                <input type="submit" name="submit" value="Ajouter le produit">
            </p>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>