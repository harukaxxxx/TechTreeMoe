<?php
$dirOrigin = '../../resource/ship_previews';
$dirTarget = '../../resource/padding';
$list = scandir($dirTarget);

foreach ($list as $filename) {
    if (substr($filename,0,1) == "-") {
        $shipname = substr($filename,1,7);
        $editname = substr($filename,1,9);
        if (!file_exists("$dirTarget/$ship/$editname.png")) {
            echo "Copying $shipname <br>";
            copy("$dirOrigin/$shipname.png","$dirTarget/$ship/$editname.png");
        }else {
            echo "$shipname exists!!<br>";
        }  
    } else {
        echo "No file found!!<br>";
    }
}

echo "<hr>Program complete!!"
?>