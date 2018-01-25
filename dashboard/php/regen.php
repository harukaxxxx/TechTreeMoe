<?php
$dirJSON = '../../assets/database/shipJSON';
$dirList = scandir($dirJSON);
$jsonList=[];
foreach ($dirList as $jsonName) {  
    if ($jsonName !== '.' && $jsonName !== '..') {  
        array_push($jsonList,$jsonName);
    } 
}
$jsonData=json_encode($jsonList,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
file_put_contents("../../assets/database/allJSON.json", $jsonData);
?>
