<?php
require_once ('ConnectVars.php');
require_once ('Dataset.php');

class Query {
    private $connection;

    /*
    Description:
    Input:
    Output:
    */
    function __construct(){
        $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    }


    function getFirstDataSets(){
        $datasets = array();
        $result = $this->connection->query("SELECT * FROM DataSource LIMIT 20");
        while($row = $result->fetch_assoc()){
            array_push($datasets, new Dataset($row['DataID'],$row['DataName'],$row['Custodian'],$row['DCC'],$row['DD'],$row['DAC'],$row['Attr']));
        }   
        return $datasets;
    }
    
    /*
    Description:
    Input:
    Output:
    */
    function getFilteredDataSets($filters){
        $datasets = array();
        $DataIDs = array();
        // Gets the DataIDs of all datasets with the filter
        foreach($filters as $filter => $value){
            $query = sprintf("SELECT DataID FROM Categories WHERE CatName = '%s';",$value);
            $result = $this->connection->query($query);
            while($row = $result->fetch_assoc()){
                array_push($DataIDs, $row['DataID']);
            }
        }

        // Removes duplicate dataIds
        $DataIDs = array_unique($DataIDs);
        // Gets the information for all datasets
        foreach($DataIDs as $dataID){
            $query = sprintf("SELECT * FROM DataSource WHERE DataID = %d;",$dataID);
            $result = $this->connection->query($query);
            while($row = $result->fetch_assoc()){
                array_push($datasets, new Dataset($row['DataID'],$row['DataName'],$row['Custodian'],$row['DCC'],$row['DD'],$row['DAC'],$row['Attr']));
            }   
        }
        return $datasets;
    }

    /*
    Description:
    Input:
    Output:
    */
    function getDataSet($DataId){
        $query = sprintf("SELECT * FROM DataSource WHERE DataID = %s;",$DataId);
        $result = $this->connection->query($query);
        $row = $result->fetch_assoc();
        $dataset = new Dataset($row['DataID'],$row['DataName'],$row['Custodian'],$row['DCC'],$row['DD'],$row['DAC'],$row['Attr']);
        return $dataset;
    }


    /*
    Description:
    Input:
    Output:
    */
    function getSearchedDataSets($searchParam){
        $datasets = array();
        $query = sprintf("SELECT * FROM DataSource WHERE DataName LIKE '%%s%' OR DD LIKE '%%s%';",$searchParam,$searchParam);
        $result = $this->connection->query($query);
        while($row = $result->fetch_assoc()){
            array_push($datasets, new Dataset($row['DataID'],$row['DataName'],$row['Custodian'],$row['DCC'],$row['DD'],$row['DAC'],$row['Attr']));
        }   
        return $datasets;
    }
}
?>