<?php

require './model/model.php';

function home(){
    include('./view/view-index.php');   
}

function feed(){
    $reponse = setPosts();
    include('./view/view-feed.php');
}

function getConnectionDb(){
   $bdd = getDB();
   return $bdd;
}

function setSession(){
    createSession();
}



