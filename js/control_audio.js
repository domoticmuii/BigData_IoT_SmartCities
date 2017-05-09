// JavaScript Document

function controlador(){
	if(responsiveVoice.isPlaying()) {
  		responsiveVoice.pause();
	}
	else{
		responsiveVoice.resume();
		}
}
		
function mostrar(){
	for(var i=0;i<10;i++){
		document.getElementById(i).style.display='inline';
	}
}