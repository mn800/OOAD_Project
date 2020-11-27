class Searchbar{

	
	search(){
		var input, filter, ul, li, a, i, textValue, datarow, datacol,data,datadesc;
		input = document.getElementById("searchBar");
		filter = input.value.toUpperCase();

		if(filter != ''){
			document.getElementById("dataPreview").innerHTML = '';
			// Test for refreshing the items in the data preview
			for( i = 0; i < 10; i++){
				datarow = document.createElement("div");
				datarow.className = "row";
				datacol = document.createElement("div");
				datacol.className = "col";
				datacol.style = "border: 1px solid black; height: 12vh; border-radius: 4px; margin: .5vh; overflow: hidden;";
				data = document.createElement("p");
				data.style = "font-size: 12pt;";
				data.innerHTML = filter;
				datadesc = document.createElement("p");
				// Limit length of description so that text doesn't overflow
				datadesc.innerHTML = "This is some writting i am writing to see how the things will look with words in them. What happens "+
				"when the text is too long for the box? does it just stop or does it stretch the size of the box. Guess we need a bit "+
				"more text to make this work.This is some writting i am writing to see how the things will look with words in them. What happens "+
				"when the text is too long for the box? does it just stop or does it stretch the size of the box. Guess we need a bit "+
				"more text to make this work.";
				datacol.appendChild(data);
				datacol.appendChild(datadesc);
				datarow.appendChild(datacol);
				document.getElementById("dataPreview").appendChild(datarow);
			}

		}
		/*
			ul = document.getElementById("myUL");
			li = ul.getElementsByTagName("li");
			for (i = 0; i < li.length; i++){
				a = li.[i].getElementsByTagName("a")[0];
				textValue = a.textContent || a.innerText;
				if (textValue.toUpperCase().indexOf(filter) > -1){
					li[i].style.display = "";
				}
				else{
					li[i].style.display = "none";
				}
				
			}
		*/
	}
}
