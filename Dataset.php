<?php
class Dataset{
    private $dataId;
    private $dcc;
    private $dataDesc;
    private $dac;
    private $attr;

    function __init__($arg1, $arg2, $arg3, $arg4, $arg5){
        $dataId = $arg1;
        $dcc = $arg2;
        $dataDesc = $arg3;
        $dac = $arg4;

    }

    function setDataId($arg1){
        $dataId = $arg1;
    }

    function getDataId(){
        return $dataId;
    }

    function setDcc($arg1){
        $dcc = $arg1;
    }

    function getDcc(){
        return $dcc;
    }

    function setDataDesc($arg1){
        $dataDesc = $arg1;
    }

    function getDataDesc(){
        return $dataDesc;
    }

    function setDac($arg1){
        $dac = $arg1;
    }

    function getDac(){
        return $dac;
    }

    function setAttr($arg1){
        $attr = $arg1;
    }

    function getAttr(){
        return $attr;
    }
}

?>