<?php
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
                        DESC LIMIT 0, 10');

while($datas = $reponse->fetch()){
?>
<div class="feed-content last-msg">
    <p class="post"><?php echo '<span class="pseudo">'. $datas['pseudo'] .'</span>' .' <span class="message">" '. $datas['message'] .' "</span>'; ?></p>
    <?php
    // Set value with a zero when this is smaller 10
    $day = (int) $datas['day'] < 10 ?  '0'. $datas['day'] :  $datas['day'];
    $month = (int) $datas['month'] < 10 ? '0'. $datas['month'] :  $datas['month'];
    $hour = (int) $datas['hour'] < 10 ? '0'. $datas['hour'] :  $datas['hour'];
    $minute = (int) $datas['minute'] < 10 ? '0'. $datas['minute'] :  $datas['minute'];  
    $seconde = (int) $datas['seconde'] < 10 ? '0'. $datas['seconde'] :  $datas['seconde'];
    ?>
    <p class="time"><?php echo '<span class="posted">Posté le '. $datas['nameday'] . ' '. $day . '/'. $month .'/'. $datas['year'] . ' à '. $hour . ' h ' . $minute . ' m ' . $seconde . ' s </span>';?></p>
</div>
<?php    
}
$reponse->closeCursor();
?>