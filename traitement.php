<?php
    session_start(); //Function used to create & save the informations in a session

    if(isset($_POST['submit'])){ // Limit the access to traitement.php to the HTTP requests that come from the form only

        $name = filter_input(INPUT_POST,"name",FILTER_SANITIZE_FULL_SPECIAL_CHARS); // FILTER_SANITIZE_STRING Delete the special characters of a character string 
        $price= filter_input(INPUT_POST,"price",FILTER_VALIDATE_FLOAT,FILTER_FLAG_ALLOW_FRACTION); // FILTER_VALIDETA_FLOAT validate the price if it contains coma (no text) // FILTER_FLAG_ALLOW_FRACTION is add to allow "," or "." for the decimal
        $qtt= filter_input(INPUT_POST,"qtt",FILTER_VALIDATE_INT); // FILTER_VALIDATE_INT will not validate the quantity if it is not an whole number (diferent of 0)

        if($name && $price && $qtt){

            $product = [
                "name" => $name,
                "price" => $price,
                "qtt" => $qtt,
                "total" => $price*$qtt
            ];

            $_SESSION["product"][]=$product; // Stock the datas in a session
        }
    } 

    header("Location:index.php"); // Send a new form to the user.