var boton = document.getElementById("animacion");

function miFuncion(){
	document.getElementById("pieza").className += " cssanimation flipXZoomIn";
	boton.disabled = true;
}

boton.addEventListener("click",miFuncion);

var element = document.getElementById("animacion");

snabbt(element, 'attention', {
  rotation: [0, 0, Math.PI/2],
  springConstant: 1.9,
  springDeceleration: 0.9,
});