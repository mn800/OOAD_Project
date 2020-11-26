<?php
class Dataset{
    private $dataId;
    private $cust;
    private $dcc;
    private $dataDesc;
    private $dac;
    private $attr;

    /*
    Description:
    Input:
    Output:
    */
    function __construct($arg1, $arg2, $arg3, $arg4, $arg5, $arg6){
        $this->dataId = $arg1;
        $this->cust = $arg2;
        $this->dcc = $arg3;
        $this->dataDesc = $arg4;
        $this->dac = $arg5;
		$this->attr = $arg6;
    }

    /*
    Description:
    Input:
    Output:
    */
    function setDataId($arg1){
        if(is_int($arg1) != true){
            return "Entered value is not an integer";
        }
        elseif($arg1<0){
            return "Entered value is not a natural number";
        }
        else{
            $this->dataId = $arg1;
        }
    }

    /*
    Description:
    Input:
    Output:
    */
    function getDataId(){
        return $this->dataId;
    }

    /*
    Description:
    Input:
    Output:
    */
    function setDcc($arg1){
        $this->dcc = $arg1;
    }

    /*
    Description:
    Input:
    Output:
    */
    function getDcc(){
        return $this->dcc;
    }

    /*
    Description:
    Input:
    Output:
    */
    function setDataDesc($arg1){
        $this->dataDesc = $arg1;
    }

    /*
    Description:
    Input:
    Output:
    */
    function getDataDesc(){
        return $this->dataDesc;
    }

    /*
    Description:
    Input:
    Output:
    */
    function setDac($arg1){
        $this->dac = $arg1;
    }

    /*
    Description:
    Input:
    Output:
    */
    function getDac(){
        return $this->dac;
    }

    /*
    Description:
    Input:
    Output:
    */
    function setAttr($arg1){
        $this->attr = $arg1;
    }

    /*
    Description:
    Input:
    Output:
    */
    function getAttr(){
        return $this->attr;
    }
}

?>