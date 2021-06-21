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
<div class="feed-content">
    <p class="post"><?php echo '<span class="pseudo">'.$datas['pseudo'].'</span>' .' <span class="message">" '. $datas['message'].' "</span>'; ?></p>
    <p class="time"><?php echo '<span class="posted">posté le '. $datas['nameday']. ' '. $datas['day']. '/'. $datas['month'].'/'. $datas['year']. ' à '. $datas['hour'] . ' h ' . $datas['minute']. ' m ' . $datas['seconde'] . ' s </span>';?></p>
</div>
<?php    
}
$reponse->closeCursor();
?>