<?php
require_once ("Dataset.php");
require_once ("ConnectVars.php");
class DataPageCreator{

    private $fileLocation;

    function __construct($location){
        $this->fileLocation = $location;
    }

    function checkFileExists($filename){
        $file = fopen(sprintf("%s%s",$this->fileLocation, $filename), "r");
        if(!$file){
            return false;
        }
        else{
            return true;
        }
    }

    function createPage($dataset){
        
        try{
            $filename = sprintf("%d.hhtml", $dataset->getDataId());
            if($this->checkFileExists($filename) == false){
                $file = fopen(sprintf("%s%s",$this->fileLocation, $filename), "w");
                fwrite($file,'<!DOCTYPE html>
                            <html lang="en">
                            <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <link rel="icon" href = "/images/Windsor_Icon.png">
                            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
                            <link rel="stylesheet" href="main.css">
                            <title>Dataset Template</title>
                            </head>
                            <body>
                            <nav class="navbar navbar-light" style="background-color: rgb(26,47,57)">
                            <a class="imageNav" href="/WindsorWebsite.html">
                            <img src = "/images/Windsor_Logo.png" style="height:50px">    
                            </a>
                            </nav>
                            </body>
                            <div class = container>
                            <div class = "row">
                            <div class="col" >
                            <p style="font-size: 18pt; font-weight: bold;">'
                );
                fwrite($file,$dataset->getDataName());
                fwrite($file,'</p> 
                            </div>
                            </div>
                            <div class = "row">
                            <div class="col" >
                            <p style="font-size: 18pt; font-weight: bold;">Custodian</p> 
                            </div>
                            </div>
                            <div class = "row">
                            <div class="col" >
                            <p style="font-size: 12pt;">'
                );
                fwrite($file,$dataset->getCust());
                fwrite($file,'</p> 
                            </div>
                            </div>
                            <div class = "row">
                            <div class="col" >
                            <p style="font-size: 18pt; font-weight: bold;">Data Currency Comments</p> 
                            </div>
                            </div>
                            <div class = "row">
                            <div class="col" >
                            <p style="font-size: 12pt;">'
                );
                fwrite($file,$dataset->Dcc());
                fwrite($file,'</p> 
                            </div>
                            </div>
                            <div class = "row">
                            <div class="col" >
                            <p style="font-size: 18pt; font-weight: bold;">Dataset Description</p> 
                            </div>
                            </div>
                            <div class = "row">
                            <div class="col" >
                            <p style="font-size: 12pt;">'
                );
                fwrite($file,$dataset->getDataDesc());
                fwrite($file,'</p> 
                            </div>
                            </div>
                            <div class = "row">
                            <div class="col" >
                            <p style="font-size: 18pt; font-weight: bold;">Data Accuracy Comments</p> 
                            </div>
                            </div>
                            <div class = "row">
                            <div class="col" >
                            <p style="font-size: 12pt;">'
                );
                fwrite($file,$dataset->getDac);
                fwrite($file,'</p> 
                            </div>
                            </div>
                            <div class = "row">
                            <div class="col" >
                            <p style="font-size: 18pt; font-weight: bold;">Attributes</p> 
                            </div>
                            </div>
                            <div class = "row">
                            <div class="col" >
                            <p style="font-size: 12pt;">'
                );
                fwrite($file,$dataset->getAttr());
                fwrite($file,'</p> 
                            </div>
                            </div>
                            <div class = "row">
                            <div class="col" >
                            <p style="font-size: 18pt; font-weight: bold;">Relevant Downloads</p> 
                            </div>
                            </div>
                            <div class = "row">
                            <div class="col" >
                            <p style="font-size: 12pt;">Relevant Downloads Information</p> 
                            </div>
                            </div>
                            <div class = "row">
                            <div class="col" >
                            <a style="font-size: 12pt;" href = "/WindsorWebsite.html">Back to List</a> 
                            </div>
                            </div>
                            </div>

                            </html>'
                );
                return true;
            }
            return true;
        }
        catch(Exception $e){
            return false;
        }
    }
}

?>
