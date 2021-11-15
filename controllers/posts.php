<?php

require_once('models/posts.php');

function getPostsListController(){
    $postList = getPostsListFromDB();
    $tableData = '';
    foreach($postList as $postItem){
        $tableData.="<tr>";
        foreach ($postItem as $attr){
            $tableData.="<td>";
            $tableData.=$attr;
            $tableData.="</td>";
        }
        $tableData.="<td><a href='index.php?action=comments-list&post_id=".$postItem["id"]."'>Voir</a></td>";
        $tableData.="</tr>";
    }

    require_once('views/header.php');
    require_once('views/posts.php');
    require_once('views/footer.php');
}
/** Doit contenir les méthodes pour  traiter les postes
 * Rappel : Le controller fait appel au modèle et renvoie à la vue,
 * il n'est qu'un intermédiaire entre ces deux derniers.
 */