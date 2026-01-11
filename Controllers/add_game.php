<?php
session_start();

require './Models/jeu.php';

if (isset($_GET['name'])) {
  $listeJeux = displayGameWithNameLike($_GET['name']);
  if (sizeof($listeJeux)==0) {
    header("Location: ?action=add_game_form");
  }
} else {
  $listeJeux = displayAllGames();
}

if (isset($_POST['idJeux'])) {
  addToLibrary($_SESSION['id_user'],$_POST['idJeux']);
}

  require './Views/header.php';
  require './Views/add_game.php';
  require './Views/footer.php';
?>