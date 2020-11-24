<?php
require_once ('Dataset.php');
require_once ('Query.php');

$params = $_POST;
$JSONcon = new JSONConverter();
$Querier = new Query();

if(array_key_exists('Get Starting Datasets')){
    printf("You are accessing JSListener\n");
    //printf("%s",$JSONcon->toJSON($Querier->getFirstDataSets()));
}

elseif(array_key_exists('Get Datasets', $params)){
    // do something
}

elseif(array_key_exists('Get Dataset', $params)){
    // do something
}

?>