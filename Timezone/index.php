<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <script src="js/script.js"></script>
        <script src="js/jquery-2.1.3.min.js"></script>
        <!--<link rel="stylesheet" type="text/css" href="css/global.css">-->
        <title></title>
    </head>
    <body>
        <?php
            include "Horloge.php";
            $horloge1 = new Horloge("America/Buenos_Aires");
            echo "<div class='gridPiece' style='background: ".$horloge1->getCouleur().";' id='gp1'>";
            echo '<div class="clock">';
            echo '<div class="hour" id="h1"></div>';
            echo '<div class="minute" id="m1"></div>';
            echo '</div>';
            echo '<script>$("#h1").css("transform", "rotate(' . $horloge1->getAngleAigHeure() . 'deg)");';
            echo '$("#m1").css("transform", "rotate(' . $horloge1->getAngleAigMin() . 'deg)");</script>';
            echo '<div class="ville">'.strtoupper($horloge1->getVille()).'</div>';
            echo '<div class="date">'.$horloge1->getDate().'</div></div>';
            $horloge2 = new Horloge("Australia/Sydney");
            echo "<div class='gridPiece' style='background: ".$horloge2->getCouleur().";' id='gp1'>";
            echo '<div class="clock">';
            echo '<div class="hour" id="h2"></div>';
            echo '<div class="minute" id="m2"></div>';
            echo '</div>';
            echo '<script>$("#h2").css("transform", "rotate(' . $horloge2->getAngleAigHeure() . 'deg)");';
            echo '$("#m2").css("transform", "rotate(' . $horloge2->getAngleAigMin() . 'deg)");</script>';
            echo '<div class="ville">'.strtoupper($horloge2->getVille()).'</div>';
            echo '<div class="date">'.$horloge2->getDate().'</div></div>';
            $horloge3 = new Horloge("Asia/Taipei");
            echo "<div class='gridPiece' style='background: ".$horloge3->getCouleur().";' id='gp3'>";
            echo '<div class="clock">';
            echo '<div class="hour" id="h3"></div>';
            echo '<div class="minute" id="m3"></div>';
            echo '</div>';
            echo '<script>$("#h3").css("transform", "rotate(' . $horloge3->getAngleAigHeure() . 'deg)");';
            echo '$("#m3").css("transform", "rotate(' . $horloge3->getAngleAigMin() . 'deg)");</script>';
            echo '<div class="ville">'.strtoupper($horloge3->getVille()).'</div>';
            echo '<div class="date">'.$horloge3->getDate().'</div></div>';
            $horloge4 = new Horloge("Europe/Paris");
            echo "<div class='gridPiece' style='background: ".$horloge4->getCouleur().";' id='gp1'>";
            echo '<div class="clock">';
            echo '<div class="hour" id="h4"></div>';
            echo '<div class="minute" id="m4"></div>';
            echo '</div>';
            echo '<script>$("#h4").css("transform", "rotate(' . $horloge4->getAngleAigHeure() . 'deg)");';
            echo '$("#m4").css("transform", "rotate(' . $horloge4->getAngleAigMin() . 'deg)");</script>';
            echo '<div class="ville">'.strtoupper($horloge4->getVille()).'</div>';
            echo '<div class="date">'.$horloge4->getDate().'</div></div>';
            ?>
        </div>
    </body>
</html>
