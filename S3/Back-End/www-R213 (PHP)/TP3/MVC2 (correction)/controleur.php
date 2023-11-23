<?php
require "modele.php";

// Initialisation des variables
$table = [];

if (!empty($_POST["liste"]))
{
  $liste = $_POST["liste"];

  if ($liste == "clients")
    $table = $client;
  else if ($liste == "articles")
    $table = $article;
}
else
  $liste = '';

require "vue.php";