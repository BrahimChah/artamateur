$(document).ready(function() {
	carousel = $(".carousel"),
		items = $(".item"),
		currdeg  = 0; // Angle courant en degré
	setInterval(function(){rotate()}, '5000');
	function rotate(e){  //e est event.
		if (currdeg  == '-360'){
			 currdeg = currdeg + 360;
              console.log(currdeg);
              carousel.css({ // on modifie le css du carousel, on effectue une rotation sur l'axe y
                "-webkit-transform": "rotateY("+currdeg+"deg)",
                "-moz-transform": "rotateY("+currdeg+"deg)",
                "-o-transform": "rotateY("+currdeg+"deg)",
                "transform": "rotateY("+currdeg+"deg)",
                "transition": "transform 0s"
              });
                items.css({ // on modifie le css de la classe item, on effectue une rotation sur l'axe y
                "-webkit-transform": "rotateY("+(-currdeg)+"deg)",
                "-moz-transform": "rotateY("+(-currdeg)+"deg)",
                "-o-transform": "rotateY("+(-currdeg)+"deg)",
                "transform": "rotateY("+(-currdeg)+"deg)",
                "transition": "transform 0s"
              });
		}
		else 
		{
	      currdeg = currdeg - 120;
	      console.log(currdeg);
		  carousel.css({ // on modifie le css du carousel, on effectue une rotation sur l'axe y
			"-webkit-transform": "rotateY("+currdeg+"deg)",
			"-moz-transform": "rotateY("+currdeg+"deg)",
			"-o-transform": "rotateY("+currdeg+"deg)",
			"transform": "rotateY("+currdeg+"deg)",
			"transition": "transform 1s"
		  });
			items.css({ // on modifie le css de la classe item, on effectue une rotation sur l'axe y
			"-webkit-transform": "rotateY("+(-currdeg)+"deg)",
			"-moz-transform": "rotateY("+(-currdeg)+"deg)",
			"-o-transform": "rotateY("+(-currdeg)+"deg)",
			"transform": "rotateY("+(-currdeg)+"deg)",
			"transition": "transform 1s"
		  });
		}
	}
});



