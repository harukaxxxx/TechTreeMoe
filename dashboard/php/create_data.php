<?php
$name = $_POST['id'];
switch ($_POST['tier']) {
    case 'I':
        $_POST['tier'] = 'I';
        break;
    case 'II':
        $_POST['tier'] = 'Ⅱ';
        break;
    case 'III':
        $_POST['tier'] = 'Ⅲ';
        break;
    case 'VI':
        $_POST['tier'] = 'Ⅳ';
        break;
    case 'V':
        $_POST['tier'] = 'Ⅴ';
        break;
    case 'VI':
        $_POST['tier'] = 'Ⅵ';
        break;
    case 'VII':
        $_POST['tier'] = 'Ⅶ';
        break;
    case 'VIII':
        $_POST['tier'] = 'Ⅷ';
        break;
    case 'IX':
        $_POST['tier'] = 'Ⅸ';
        break;
    case 'X':
        $_POST['tier'] = 'X';
        break;
}
switch ($_POST['nation']) {
    case 'italy':
        $_POST['nation'] = 'italia';
        break;
}
$data = json_encode($_POST, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
file_put_contents("../../assets/database/shipJSON/$name.json", $data);
