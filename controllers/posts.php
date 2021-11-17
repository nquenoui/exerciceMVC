<?php

require_once('models/posts.php');

function getPostsListController(){
    $postList = getPostsListFromDB();

    require_once('views/header.php');
    require_once('views/posts.php');
    require_once('views/footer.php');
}
/** Doit contenir les méthodes pour  traiter les postes
 * Rappel : Le controller fait appel au modèle et renvoie à la vue,
 * il n'est qu'un intermédiaire entre ces deux derniers.
 */