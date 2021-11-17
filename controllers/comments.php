<?php

require_once('models/comments.php');
require_once('models/posts.php');

/** Doit contenir les méthodes pour  traiter les commentaires d'un poste
 * Rappel : Le controller fait appel au modèle et renvoie à la vue,
 * il n'est qu'un intermédiaire entre ces deux derniers.
 */

function getCommentsOfPostController($postId){
    $commsList = getCommsListFromDB($postId);
    

    $postInfo = getPostFromDB($postId);

    if(count($postInfo) == 1){
        $title = $postInfo[0]["title"];
        $description = $postInfo[0]["description"];
    } else {
        $title = "Ce post n'existe pas";
        $description = "";
    }

    require_once('views/header.php');
    require_once('views/comments.php');
    require_once('views/footer.php');
}


