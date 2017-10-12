<?php
if ($handle = opendir('cache')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            unlink( "cache/$entry");
        }
    }
    closedir($handle);
}
header("Location:../../");
?>