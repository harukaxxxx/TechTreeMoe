<?php
    $file = $_POST['file'];
    if ($handle = opendir('../../assets/php/cache')) {
        while (false !== ($entry = readdir($handle))) {
            if ($file == 'all') {
                unlink( "../../assets/php/cache/$entry");
            } else {
                if ($entry == $file) {
                unlink( "../../assets/php/cache/$entry");
                }
            }
        }
        closedir($handle);
    }
?>