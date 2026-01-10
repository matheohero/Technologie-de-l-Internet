<?php

require './Models/profile.php';

session_start();

$error = '';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  if (isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action === 'MODIFIER') {
      if (isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['password']) 
      && isset($_POST['confirmed-password'])) {
        if ($_POST['password'] != $_POST['confirmed-password']) {
          $error = 'Les mots de passe ne correspondent pas';
        } else {
          $password = hash("sha256",$_POST['password']);
          updateProfile($_SESSION['id_user'],$_POST['name'],$_POST['firstname'],$_POST['email'],$password);
        }
      }
    } elseif ($action === 'SE DECONNECTER') {
      session_destroy();
      header('Location: index.php');
      exit();
    } elseif ($action === 'SUPPRIMER MON COMPTE') {
      deleteProfile($_SESSION['id_user']);
      session_destroy();
      header('Location: index.php');
      exit();
    }
  }
}

$profile = getProfile($_SESSION['id_user']);

require './Views/header.php';
require './Views/profile.php';
require './Views/footer.php';

?>