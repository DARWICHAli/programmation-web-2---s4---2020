

var button_sign = document.getElementById('button_sign');

button_sign.onclick = function(){
	
	var tmp = document.getElementById("email").value ;

	var bol = document.getElementById("email").value.indexOf("@");
	var bol1 = document.getElementById("email").value.indexOf(".");
	if(bol == -1 && bol1 == -1){
		document.getElementById("email").placeholder = "no @ && ." ;
	}
	if(bol ==  -1 ){
		//alert("no @");
		document.getElementById("email").placeholder = "no @" ;
	}
	if(bol1 == -1){
		//alert("no .");
		document.getElementById("email").placeholder = "no @" ;
	}

	if( document.getElementById("paswd").value.length < 6){
		//alert("too short");
		document.getElementById("paswd").value = "" ;
		document.getElementById("paswd").placeholder = "too short!!" ;
	}
	if( document.getElementById("paswd").value !=  document.getElementById("paswd1").value){
		document.getElementById("paswd").value = "" ;
		document.getElementById("paswd1").value = "" ;
		document.getElementById("paswd").placeholder = "mot de pass pas identique" ;
		document.getElementById("paswd1").placeholder = "mot de pass pas identique" ;
	}
	else{
		document.getElementById("button_sign").type = "submit" ;
	}

}
