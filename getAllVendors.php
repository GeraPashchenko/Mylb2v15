<?php 

    require_once __DIR__ . "/vendor/autoload.php";
    $collection = (new MongoDB\Client) -> dbforlab -> items;
    $cursor = $collection -> find();
    $res = [];

    foreach($cursor as $document){
        array_push($res, $document["manufacturer"]);
        
    }
    echo json_encode($res);
?>