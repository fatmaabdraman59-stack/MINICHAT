<?php

/**
 * Get database connection
 * @return object
 */
function getDB(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=minichat;port=3308;charset=utf8', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(Exception $e){
        die('Erreur : '. $e->getMessage());
    }

    return $bdd;
}

/**
 * Set all messages of users of the chat stored on database
 * @return object
 */
function setPosts(){
    $db = getDB();
    $reponse = $db->query('SELECT pseudo, 
                                message,
                                LOWER(DAYNAME(date_creation)) AS nameday, 
                                DAY(date_creation) AS day, 
                                MONTH(date_creation) AS month,
                                YEAR(date_creation) AS year,
                                HOUR(date_creation) AS hour,
                                MINUTE(date_creation) AS minute,
                                SECOND(date_creation) AS seconde 
                            FROM chat 
                            ORDER BY id 
                            DESC LIMIT 0, 20
                            ');
    return $reponse;                    
}

/**
 * Set cookie with pseudo of user
 * @return bool
 */
function createSession(){
    session_set_cookie_params(["SameSite" => "Strict"]); 
    session_set_cookie_params(["Secure" => "true"]); 
    session_set_cookie_params(["HttpOnly" => "true"]);
    session_start();
    $_SESSION['pseudo'] = $_POST["pseudo"];

    return setcookie('pseudo', $_POST["pseudo"], time() + 365 * 24 * 3600, null, null, false, true);
}