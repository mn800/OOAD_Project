class Searchbar{
	search(){
		var input, filter;
		input = document.getElementById("searchBar");
		filter = input.value.toUpperCase();
		QueryPhp.searchByParam(filter);
	}
}
