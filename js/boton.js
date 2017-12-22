var boton = document.getElementById("animacion");

function miFuncion(){
	document.getElementById("pieza").className += " cssanimation flipXZoomIn";
	boton.disabled = true;
}

boton.addEventListener("click",miFuncion);
	