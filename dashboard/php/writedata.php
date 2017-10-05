<?php
$id = $_POST['id'];
$_POST['default'] = (int)$_POST['default'];
if ($_POST['change'] === 'true') {
    $_POST['change'] = true;
}else{
    $_POST['change'] = false;
}
if ($_POST['premium'] === 'true') {
    $_POST['premium'] = true;
}else{
    $_POST['premium'] = false;
}
if ($_POST['arp'] === 'true') {
    $_POST['arp'] = true;
}else{
    $_POST['arp'] = false;
}
$data = json_encode($_POST,JSON_UNESCAPED_UNICODE);
file_put_contents("../../database/$id.json", $data);
?>