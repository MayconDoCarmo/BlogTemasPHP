<?php 
  include_once("helpers/url.php");
  include_once("data/categories.php");
  include_once("data/posts.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Sem Money</title>
  <link rel="stylesheet" href="<?php $BASE_URL?>css/style.css">
  <script src="<?php $BASE_URL?>js/script.js" defer></script>
  <!--GOOGLE FONTS-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
  <header class="header">
    <a href="<?php $BASE_URL ?>" class="logo">
      <img src="<?php $BASE_URL ?>img/logo.svg" alt="Blog Sem Money">
    </a>
    <nav class="nav-menu" id="nav-menu">
      <button class="btn-mobile" id="btn-mobile"></button>
      <ul>
        <li><a href="<?php $BASE_URL ?>">Home</a></li>
        <li><a href="#">Categorias</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="<?php $BASE_URL ?>">Contato</a></li>
      </ul>
    </nav>
  </header>

