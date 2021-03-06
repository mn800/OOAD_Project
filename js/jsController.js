var search = new Searchbar();
var filters = new FilterSearch();

function doAction(value){
    console.log(value);

    if(!Array.isArray(value)){
        if(value == "Search"){
            filters.removeAllFilters();
            search.search();
        }
        else if(value == 'load'){
            QueryPhp.loadPage();
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
        else if(value[0] == "dataset"){
            QueryPhp.getDatasetPage(value[1]);
        }
    }
}