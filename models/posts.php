<?php

require_once('database.php');

function getPostsListFromDB(){
    try{
        $pdo = initDatabse();
        $statement = $pdo->prepare('select * from posts');
        $statement->execute();
        $res = $statement->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $exception) {
        echo($exception->getMessage());
        exit('Erreur de connexion Ã  la base de donnÃ©es');
    }
    return $res;
}

/** Doit contenir les méthodes pour  traiter les postes.
 * Rappel : Le modèle fait appel à la base de données.
 * Il doit donc contenir les requêtes et s'occuper au maximum du traitement des données
 */
