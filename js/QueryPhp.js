class QueryPhp{
    static phpFile = "http://dipie111.myweb.cs.uwindsor.ca/WindsorWebsite/php/JSListener.php";

    static getDatasetPage(dataId){
        var body, i;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", this.phpFile.toString(), true)
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded; charset=UTF-8");
        xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                var response = this.responseText;
                console.log(response);
                if(response == "true"){
                    window.location = "/WindsorWebsite/datasetpages/"+dataId+".html";
                }
            }
        }
        body = "DatasetPage=true"+"&dataId="+dataId;
        console.log(body);
        xmlhttp.send(body);

    }
 

    static searchByFilters(filters){
        var body, i, datarow, datacol, data, datadesc;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", this.phpFile.toString(), true)
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded; charset=UTF-8");
        xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
            	var response = JSON.parse(this.responseText);
              	console.log(response.length);
                if(response.length > 0){
                  document.getElementById("dataPreview").innerHTML = '';
                  for(i = 0; i < response.length; i++){
                      datarow = document.createElement("div");
                      datarow.className = "row";
                      datacol = document.createElement("div");
                      datacol.className = "col";
                      datacol.style = "border: 1px solid black; height: 12vh; border-radius: 4px; margin: .5vh; overflow: hidden;";
                      datacol.setAttribute("onclick", "doAction(['dataset',"+response[i].dataId+"])");
                      data = document.createElement("p");
                      data.style = "font-size: 12pt;";
                      data.innerHTML = response[i].dataName;
                      datadesc = document.createElement("p");
                      // Limit length of description so that text doesn't overflow
                      datadesc.innerHTML = response[i].dataDesc;
                      datacol.appendChild(data);
                      datacol.appendChild(datadesc);
                      datarow.appendChild(datacol);
                      document.getElementById("dataPreview").appendChild(datarow);
                  }
                  
                }
            }
        }
        body = "Filtered_Search=true";
        for(i = 0; i < filters.length; i++){
            body = body.concat("&p"+i+"="+filters[i]);
        }
        xmlhttp.send(body);
        console.log(body);
    }

}