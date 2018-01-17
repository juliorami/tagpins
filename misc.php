	wp_enqueue_script( 'letteranimation', get_template_directory_uri()."/vendor/cssanimation/letteranimation.min.js", array(), '1.0.0', true );
    wp_enqueue_script( 'snabbt', "https://cdnjs.cloudflare.com/ajax/libs/snabbt.js/0.6.4/snabbt.js", array(), '1.0.0', true );

    <div class="col-12">
	<div class="pizarron">
		<div id="pieza">
		</div>
	</div>
</div>
<div class="col-6">
	<button id="animacion">Descubre Tagpin</button>
</div>


// - - - - - - - - 
// HERO
// - - - - - - - - 
#pieza
  display: block
  width: 350px
  height: 200px
  background-image: url("../img/cork.jpg")

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