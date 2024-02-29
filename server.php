<?php 

$string = file_get_contents("dischi.json");

$dischiList = json_decode($string, true);



if(isset($_POST['discoIndex'])){
     
    $discoIndex = $_POST['discoIndex'];

    $disco = $dischiList[$discoIndex];

    $dischiList = $disco;
}

header('Content-Type: application/json');

echo json_encode($dischiList);




