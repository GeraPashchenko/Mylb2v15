<?php 

    require_once __DIR__ . "/vendor/autoload.php";

    $collection = (new MongoDB\Client) -> dbforlab -> items;
    $cond = array('amount' => "0");

    $cursor = $collection -> find($cond);
    $res = [];

    foreach($cursor as $document){
        array_push($res, $document["manufacturer"]);
        
    }
    echo json_encode($res);
?>