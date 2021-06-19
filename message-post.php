<?php
session_start();

$_SESSION['pseudo'] = $_POST["pseudo"];

setcookie('pseudo', $_POST["pseudo"], time() + 365*24*3600,null, null, false, true);

include('database.php');

// Post contents
    if(isset($_POST["pseudo"]) 
    && isset($_POST["message"]) 
    && strlen($_POST["pseudo"]) > 1 
    && strlen($_POST["message"]) > 5 ){
        $req = $bdd->prepare('INSERT INTO `chat`( `pseudo`, `message`) 
                              VALUES (:pseudo,:message)');
        $req->execute(array(
            'pseudo' => htmlspecialchars($_POST['pseudo']),
            'message' => htmlspecialchars($_POST['message'])
        ));
    } else {
        echo '<span class="msg-error">Saisissez votre pseudo et/ou votre message valides, merci :)</span>';
    }

    header('Location: index.php');
?>