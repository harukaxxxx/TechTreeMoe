<?php
if ($handle = opendir('./assets/php/cache')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            unlink( "./assets/php/cache/$entry");
        }
    }
    closedir($handle);
}
header("Location:./");
?>