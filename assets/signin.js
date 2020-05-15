
var button_sign = document.getElementById('button_sign');


button_sign.onclick = function(){

	const tmp = document.getElementById("email").value;
	var bol = document.getElementById("email").value.indexOf("@");
	const bol1 = document.getElementById("email").value.indexOf(".");
	//alert(bol + bol1);
	if(bol === -1 && bol1 == -1){ // ni @ ni .
		document.getElementById("email").value = "" ;
		document.getElementById("email").placeholder = "no @ && ." ;
	}
	else if(bol ===  -1 ){
		//alert("no @");
		document.getElementById("email").value = "" ;
		document.getElementById("email").placeholder = "no @" ;
	}
	else if(bol1 === -1){
		//alert("no .");
		document.getElementById("email").value = "" ;
		document.getElementById("email").placeholder = "no @" ;
	}
	if( document.getElementById("paswd").value.length < 6){
		//alert("too short");
		document.getElementById("paswd").value = "" ;
		document.getElementById("paswd").placeholder = "too short!!" ;
	}
	else{
		document.getElementById("button_sign").type = "send" ;
	}

	//alert("nope");
}
