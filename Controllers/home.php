<?php

require './Models/jeu.php';

$listeJeu = array();

session_start();

if (isset($_SESSION)){
    $nomUser = $_SESSION["user_name"];
    $listeJeu = displayGame($_SESSION["id_user"]);
}

require './Views/header.php';
require './Views/home.php';
require './Views/footer.php';

?>