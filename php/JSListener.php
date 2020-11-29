<?php
require_once ('Dataset.php');
require_once ('Query.php');
require_once ('JSONConverter.php');
require_once ('DataPageCreator.php');

$params = $_POST;
$JSONcon = new JSONConverter();
$Querier = new Query();
$PageCreator = new DataPageCreator("../datasetpages/");

if(array_key_exists('Load', $params)){
    printf("%s",json_encode($JSONcon->toJSON($Querier->getFirstDataSets($params))));
}

elseif(array_key_exists('Filtered_Search', $params)){
    // do something

    unset($params['Filtered_Search']);
    //print_r($params);
    printf("%s",json_encode($JSONcon->toJSON($Querier->getFilteredDataSets($params))));
}

elseif(array_key_exists('DatasetPage', $params)){
    // do something
    if($PageCreator->createPage($Querier->getDataSet($params['dataId']))){
        printf("true");
    }
    else{
        printf("false");
    }
}

elseif(array_key_exists('Search', $params)){
    printf("%s", json_encode($JSONcon->toJSON($Querier->getFilteredDataSets($params['p1']))));
}

?>