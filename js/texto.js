// JavaScript Document

window.onload = function() {
			if(sessionStorage.clickcount){
				if (document.getElementById("accordion").style.fontSize == "") {
					document.getElementById("accordion").style.fontSize = "1.0em";
	  			}
				var tam=parseFloat(sessionStorage.clickcount);
				document.getElementById("accordion").style.fontSize= tam + "em";
			}
		}
		
		function ajustarTexto(valor) {
	  		if (document.getElementById("accordion").style.fontSize == "") {
				document.getElementById("accordion").style.fontSize = "1.0em";
	  		}
	  		var tam=parseFloat(document.getElementById("accordion").style.fontSize) + (valor * 0.2);
	  		if(tam>=0.8 && tam<=1.8){
				document.getElementById("accordion").style.fontSize= tam + "em";
				sessionStorage.clickcount = tam + "em";
	 		 }
		}