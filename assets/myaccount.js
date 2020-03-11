


button_sign.onclick = function() {
	//alert("lol");
	var txt = document.getElementById("Val").value
	//alert(txt);
	//alert(mylist.options[mylist.selectedIndex].text);
	if(mylist.options[mylist.selectedIndex].text == "prenom"){
		//alert("i'm in");
		let tmp = document.getElementById("prenom").innerHTML ;
		document.getElementById("prenom").innerHTML = tmp +" " +txt ;

	}
	if (mylist.options[mylist.selectedIndex].text == "nom"){
		 tmp = document.getElementById("nom").innerHTML ;
		document.getElementById("nom").innerHTML = tmp + " " +txt ;

	}



}
