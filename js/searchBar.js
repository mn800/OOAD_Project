class Searchbar{

	
	search(){
		var input, filter, i;
		input = document.getElementById("searchBar");
		filter = input.value.toUpperCase();
		for(i = 0; i < document.getElementsByClassName("form-check").length; i++){
			document.getElementsByClassName("form-check")[i].checked = false;
		}
		QueryPhp.searchByParam(filter);
	}
}
