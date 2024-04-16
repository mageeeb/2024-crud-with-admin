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
        $insert = addOurdatas($connect,$title,$oudesc,$latitude,$longitude);
        if($insert === true){
            header("Location: ./");
            exit();
        }else{
            $error = $insert;
        }
    }

    // appel de la vue d'insertion
    require "../view/private/admin.insert.html.php";
    //var_dump($_POST);
    exit();
}

if(isset($_GET['update'])&&ctype_digit($_GET['update'])){

    $idUpdate = (int) $_GET['update'];

    // si le formulaire est envoyé
    if(isset(
        $_POST['title'],
        $_POST['ourdesc'],
        $_POST['latitude'],
        $_POST['longitude'],
        $_POST['id']
    )){

        $title = strip_tags(trim($_POST['title']));
        $oudesc = trim($_POST['ourdesc']);
        $latitude = (float) $_POST['latitude'];
        $longitude = (float) $_POST['longitude'];
        $id = (int) $_POST['id'];

        // si on récupère true, à cette fonction, il faut rediriger vers l'accueil de l'admin, sinon affichage d'une erreur
        $update = updateOurdatas($connect,$title,$oudesc,$latitude,$longitude,$id);
        if($update === true){
            header("Location: ./");
            exit();
        }else{
            $error = $update;
        }
    }

    $data = getOneOurdatas($connect,$idUpdate);
    if(is_string($data)) $message = $data;
    elseif(isset($data['error'])) $error = $data['error'];
    // appel de la vue d'insertion
    require "../view/private/admin.update.html.php";
    //var_dump($_POST);
    exit();

}

// on charge toutes les données
$ourDatas = getAllOurdatas($connect);
// pas encore de données
if(is_string($ourDatas)) $message = $ourDatas;

elseif(isset($ourDatas['error'])) $error = $ourDatas['error'];

// chargement de la vue de l'accueil de l'administration
require "../view/private/admin.homepage.html.php";