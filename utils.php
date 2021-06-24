<?php

function dateFrench($day){

    switch ($day) {
        case "monday":
            return "lundi";
            break;
        case "tuesday":
            return "mardi";
            break;
        case "wednesday":
            return "mercredi";
            break;
        case "thursday":
            return "jeudi";
            break;
        case "friday":
            return "vendredi";
            break;
        case "saturday":
            return "samedi";
            break;
        case "sunday":
            return "dimanche";
            break;
        default:
            return "Jour NC";
    }

}

?>