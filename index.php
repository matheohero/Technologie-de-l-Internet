<?php

if (isset($_GET['action'])) {
  if ($_GET['action'] == 'register') {
    require './Controllers/inscription.php';
  } else if ($_GET['action'] == 'home') {
    require './Controllers/home.php';
  } else if ($_GET['action'] == 'add_game') {
    require './Controllers/add_game.php';
  } else if ($_GET['action'] == 'add_game_form') {
    require './Controllers/add_game_form.php';
  } else if ($_GET['action'] == 'update_game') {
    require './Controllers/update_game.php';
  } else if ($_GET['action'] == 'classification') {
    require './Controllers/classification.php';
  } else if ($_GET['action'] == 'profile') {
    require './Controllers/profile.php';
  } else if ($_GET['action'] == 'logout') {
    session_start();
    session_destroy();
    header('Location: index.php');
  }
} else {
  session_start();
  if (isset($_SESSION['id_user'])) {
    session_abort();
    require './Controllers/home.php';
  } else {
    session_abort();
    require './Controllers/auth.php';
  }
} 

?>