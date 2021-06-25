<?php
require('utils.php');

$reponse = $bdd->query('SELECT pseudo, 
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
                        DESC LIMIT 0, 10
                        ');

while($datas = $reponse->fetch()){
?>
<div class="feed-content last-msg">
    <p class="post"><?php echo '<span class="pseudo">'. $datas['pseudo'] .'</span>' .' <span class="message">" '. $datas['message'] .' "</span>'; ?></p>
    <?php
    // Set value with a zero when this is smaller than 10
    $day = setZeroBeforeAValue($datas['day']);
    $month = setZeroBeforeAValue($datas['month']);
    $hour = setZeroBeforeAValue($datas['hour']);
    $minute = setZeroBeforeAValue($datas['minute']);
    $seconde = setZeroBeforeAValue($datas['seconde']);
    // Translate dayname to french language
    $dayname = dateFrench($datas['nameday']);
    ?>
    <p class="time"><?php echo '<span class="posted">Posté le '. $dayname . ' '. $day . '/'. $month .'/'. $datas['year'] . ' à '. $hour . ' h ' . $minute . ' m ' . $seconde . ' s </span>';?></p>
</div>
<?php    
}
$reponse->closeCursor();
?>