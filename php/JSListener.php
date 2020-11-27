<?php
require_once ('Dataset.php');
require_once ('Query.php');
require_once ('JSONConverter.php');

$params = $_POST;
$JSONcon = new JSONConverter();
$Querier = new Query();

if(array_key_exists('Get Starting Datasets', $params)){
    printf("You are accessing JSListener\n");
    //printf("%s",json_encode($Querier->getFirstDataSets()));
}

elseif(array_key_exists('Filtered_Search', $params)){
    // do something

    unset($params['Filtered_Search']);
    //print_r($params);
    printf("%s",json_encode($JSONcon->toJSON($Querier->getFilteredDataSets($params))));
}

elseif(array_key_exists('Get Dataset', $params)){
    // do something
}

?>