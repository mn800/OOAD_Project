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
        $result = $this->connection->query("SELECT * FROM DataSource LIMIT 90");
        while($row = $result->fetch_assoc()){
            array_push($dataset, new Dataset($row['DataID'],$row['Custodian'],$row['DCC'],$row['DD'],$row['DAC'],$row['Attr']));
        }   
        return $datasets;
    }
    /*
    Description:
    Input:
    Output:
    */
    function getFilteredDataSets($filter){
        $datasets = array();
        $result = $this->connection->query("SELECT  FROM DataSource WHERE ;");
        while($row = $result->fetch_assoc()){
            append($dataset, new Dataset($row['DataID'],$row['DCC']));
        }   
        return $datasets;
    }

    /*
    Description:
    Input:
    Output:
    */
    function getDataSet($DaId){
        $query = sprintf("SELECT * FROM DataSource WHERE 'DataID' = %s;",$DaId);
        $result = $this->connection->query($query);
        $row = $result->fetch_assoc();
        $dataset = new Dataset($row['DataID'],$row['Custodian'],$row['DCC'],$row['DD'],$row['DAC'],$row['Attr']);
        return $dataset;
    }
}
?>