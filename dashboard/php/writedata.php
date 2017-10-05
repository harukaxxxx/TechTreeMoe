<?php
$id = $_POST['id'];
$data = json_encode($_POST,JSON_UNESCAPED_UNICODE);
file_put_contents("../../database/$id.json", $data);
?>