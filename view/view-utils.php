<?php

/**
 * Convert dayname in english to french
 * @param string $day
 * @return string
 */
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
            return "Jour non communiqué";
    }

}

/**
 * Add a zero before a value when it's smaller than 10
 * @param mixed
 * @return string 
 */
function setZeroBeforeAValue($datas){
    return (int) $datas < 10 ?  '0'. $datas :  $datas;
}

$infoPages = array(
    'chat' => array(
        'metadesc' => 'Discutez et échangez vos idées via ce chat'
        )
    );

?>