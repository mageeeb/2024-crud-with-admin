<?php

// si on essaye de se déconnecter (administratorDisconnect nous redirige vers l'accueil)
if(isset($_GET['disconnect'])) administratorDisconnect();

if(isset($_GET['insert'])){

    // si le formulaire est envoyé
    if(isset(
        $_POST['title'],
        $_POST['ourdesc'],
        $_POST['latitude'],
        $_POST['longitude']
    )){

        $title = strip_tags(trim($_POST['title']));
        $oudesc = trim($_POST['ourdesc']);
        $latitude = (float) $_POST['latitude'];
        $longitude = (float) $_POST['longitude'];

        // si on récupère true, à cette fonction, il faut rédiriger vers l'accueil de l'admin, sinon affichage d'une erreur
        addOurdatas($connect,$title,$oudesc,$latitude,$longitude);
    }

    // appel de la vue d'insertion
    require "../view/private/admin.insert.html.php";
    var_dump($_POST);
    exit();
}

// on charge toutes les données
$ourDatas = getAllOurdatas($connect);
// pas encore de données
if(is_string($ourDatas)) $message = $ourDatas;

elseif(isset($ourDatas['error'])) $error = $ourDatas['error'];

// chargement de la vue de l'accueil de l'administration
require "../view/private/admin.homepage.html.php";