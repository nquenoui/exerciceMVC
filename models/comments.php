<?php

require_once('database.php');


/** Doit contenir les méthodes pour  traiter les commentaires d'un poste
 * Rappel : Le modèle fait appel à la base de donner.
 * Il doit donc contenir les requêtes et s'occuper au maximum du traitement des données
 */

function getCommsListFromDB($id){
    try{
        $pdo = initDatabse();
        $statement = $pdo->prepare('select id,description,created_at from comments where post_id = :i');
        $statement->bindParam(':i', $id);
        $statement->execute();
        $res = $statement->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $exception) {
        echo($exception->getMessage());
        exit('Erreur de connexion Ã  la base de donnÃ©es');
    }
    return $res;
}

function getPostFromDB($id){
    try{
        $pdo = initDatabse();
        $statement = $pdo->prepare('select title,description from posts where id=:i');
        $statement->bindParam(':i', $id);
        $statement->execute();
        $res = $statement->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $exception) {
        echo($exception->getMessage());
        exit('Erreur de connexion Ã  la base de donnÃ©es');
    }
    return $res;
}
