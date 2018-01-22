<?php
$dirJSON = '../../assets/database/shipJSON';
$dirOrigin = '../../resource/Material/ship_previews';
$dirTarget = '../../images/ship_previews_origin';
$List = scandir($dirJSON);

foreach($List as $ship){
    $ship = substr($ship,0,7);
        if (!file_exists("$dirTarget/$ship-0.png")) {
            echo "Copying $ship <br>";
            copy("$dirOrigin/$ship.png","$dirTarget/$ship-0.png");
        }else {
            echo "$ship exists!!<br>";
        }
}

echo "Program complete!!"
?>
