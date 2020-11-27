var search = new Searchbar();
var filters = new FilterSearch();

function doAction(value){
    console.log(value);

    if(!Array.isArray(value)){
        if(value == "Search"){
            //alert("Searching")
            search.search();
        }
    }
    else{
        if(value[0] == "checkbox" ){
            if(document.getElementById(value[1]).checked == true){
                filters.addFilter(value[1]);
            }
            else{
                filters.removeFilter(value[1])
            }

        }
    }
}