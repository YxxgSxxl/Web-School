<?php
// Affichage de la page d'accueil
function accueil() {
    require "vue/vueAccueil.php";
}

function clients() {
    require "vue/vueClients.php";
}

function articles() {
    require "vue/vueArticles.php";
}

function commandes() {
    require "vue/vueCommandes.php";
}

function erreur($message) {
    require "vue/vueErreur.php";
}