class FilterSearch{
    constructor() {
        this.filters = []
    }
    addFilter(filter){
        this.filters.push(filter);
        QueryPhp.searchByFilters(this.filters);
    }

    removeFilter(filter){
        this.filters.indexOf(filter)
        this.filters = this.filters.filter(item => item != filter);
        if(this.filters.length == 0){
            QueryPhp.loadPage();
        }
        else{
            QueryPhp.searchByFilters(this.filters);
        }
    }

    removeAllFilters(){
        var i, length;
        length = document.getElementsByClassName("form-check-input").length;
        for(i = 0; i < length; i ++){
            document.getElementsByClassName("form-check-input")[i].checked = false;
        }
    	this.filters = [];
    }

}