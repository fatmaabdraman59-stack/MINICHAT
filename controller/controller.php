<?php

require './model/model.php';

function head(){
    include('./view/view-head.php');
}

function home(){
    include('./view/view-index.php');   
}

function feed(){
    $reponse = setPosts();
    include('./view/view-feed.php');
}

function footer(){
    include('./view/view-footer.php');
}

function getConnectionDb(){
   $bdd = getDB();
   return $bdd;
}

function setSession(){
    createSession();
}



