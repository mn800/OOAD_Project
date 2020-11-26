<?php
require_once ('Dataset.php');

class JSONConverter{

    function toJSON($arg){
        // convert data set to a JSON object
        if(gettype($arg) == 'array'){
            // Array of datasets
            $jsonString = '[';
            foreach ($arg as $dataset){
                $jsonString .= sprintf('{"dataId": %d,"dcc": "%s","dataDesc": "%s","dac": "%s","attr": "%s"}'
                                ,$dataset->getDataId(),$dataset->getDcc(),$dataset->DataDesc(),$dataset->Dac(), $dataset->getAttr());
            }
            $jsonString .= ']';
            return $jsonString;
        }
        elseif(gettype($arg) == 'object'){
            // Just one dataset
            $jsonString .= sprintf('{"dataId": %d,"dcc": "%s","dataDesc": "%s","dac": "%s","attr": "%s"}'
                                ,$dataset->getDataId(),$dataset->getDcc(),$dataset->DataDesc(),$dataset->Dac(), $dataset->getAttr());
            return $jsonString;
        }
        else{
            // Neither and we have a problem
        }
    }

    function fromJSON($arg){
       $jsonArray = json_decode($args);
       return $jsonArray; 
    }
}
?>