    <div id="feed">
        <h2>Fil des messages</h2>
        <?php

        while($datas = $reponse->fetch()){
        ?>
        <div class="feed-content last-msg">
            <p class="post"><?= '<span class="pseudo">'. $datas['pseudo'] .'</span>' .' <span class="message">" '. $datas['message'] .' "</span>'; ?></p>
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
            <p class="time"><?= '<span class="posted">Posté le '. $dayname . ' '. $day . '/'. $month .'/'. $datas['year'] . ' à '. $hour . ' h ' . $minute . ' m ' . $seconde . ' s </span>';?></p>
        </div>
        <?php    
        }
        $reponse->closeCursor();
        ?>
    </div>
</section>