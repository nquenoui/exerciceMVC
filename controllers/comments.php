<?php

require_once('models/comments.php');
require_once('models/posts.php');

/** Doit contenir les méthodes pour  traiter les commentaires d'un poste
 * Rappel : Le controller fait appel au modèle et renvoie à la vue,
 * il n'est qu'un intermédiaire entre ces deux derniers.
 */

function getCommentsOfPostController($postId){
    $commsList = getCommsListFromDB($postId);
    $tableData = '';
    foreach($commsList as $commItem){
        $tableData.="<tr>";
        foreach ($commItem as $key=>$attr){
            $tableData.="<td>";
            $tableData.=$attr;
            $tableData.="</td>";
        }
        $tableData.="</tr>";
    }
    if(count($commsList) == 0){
        $tableData.="<p>Pas de commentaires pour ce post</p>";
    }

    $postInfo = getPostFromDB($postId);
    if(count($postInfo) == 1){
        $title = $postInfo[0]["title"];
        $description = $postInfo[0]["description"];
    } else {
        $title = "Ce post n'existe pas";
        $description = "";
        $tableData = "";
    }

    require_once('views/header.php');
    require_once('views/comments.php');
    require_once('views/footer.php');
}


