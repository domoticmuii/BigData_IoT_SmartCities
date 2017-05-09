// JavaScript Document
		window.onload = function() {
			if(sessionStorage.clickcount){
				if (document.getElementById("informacion").style.fontSize == "") {
					document.getElementById("informacion").style.fontSize = "1.0em";
	  			}
				var tam=parseFloat(sessionStorage.clickcount);
				document.getElementById("informacion").style.fontSize= tam + "em";
			}
		}
		
		function ajustarTexto(valor) {
	  		if (document.getElementById("informacion").style.fontSize == "") {
				document.getElementById("informacion").style.fontSize = "1.0em";
	  		}
	  		var tam=parseFloat(document.getElementById("informacion").style.fontSize) + (valor * 0.2);
	  		if(tam>=0.8 && tam<=1.8){
				document.getElementById("informacion").style.fontSize= tam + "em";
				sessionStorage.clickcount = tam + "em";
	 		 }
		}