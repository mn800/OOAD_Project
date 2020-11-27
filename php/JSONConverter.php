<?php
require_once ('Dataset.php');

class JSONConverter{

    function toJSON($arg){
        // convert data set to a JSON object
        if(gettype($arg) == 'array'){
            // Array of datasets
            $jsonArray = array();
            $i = 0;
            foreach ($arg as $dataset){
              // change array set up
                $dataArray['dataId']= $dataset->getDataId();
                $dataArray['dataName'] = $dataset->getDataName();
                $dataArray['cust'] = $dataset->getCust();
                $dataArray['dcc'] = $dataset->getDcc();
                $dataArray['dataDesc'] = $dataset->getDataDesc();
                $dataArray['dac'] = $dataset->getDac();
                $dataArray['attr'] = $dataset->getAttr();
                $jsonArray[$i] = $dataArray;
                $i += 1;
            }
            return $jsonArray;
        }
        elseif(gettype($arg) == 'object'){
            // Just one dataset
            $jsonString = '';
            $jsonString .= sprintf('{"dataId": %d,"dcc": "%s","dataDesc": "%s","dac": "%s","attr": "%s"}',$dataset->getDataId(),$dataset->getDcc(),$dataset->getDataDesc(),$dataset->getDac(), $dataset->getAttr());
            return $jsonString;
        }
        else{
            // Neither and we have a problem
          return $arg;
        }
    }

    function fromJSON($arg){
       $jsonArray = json_decode($args);
       return $jsonArray; 
    }
}
?>