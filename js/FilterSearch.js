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
        QueryPhp.searchByFilters(this.filters);
    }

}