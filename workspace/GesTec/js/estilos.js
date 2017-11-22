$(document).ready(function(){
			 
				$("#padreUno").change(function(){
					if ($(this).is(":checked")) {
						$("#hijoUno").css("background-color", "#ff9800");
						$("#radioDos").attr("checked", false);
						$("#radioTres").attr("checked", false);
						$("#radioUno").attr("checked", true);
						/*$("#padreDos .lever:before").css("right":"18px");
						$("#padreTres .lever:before").css("right":"18px");*/
					} else{
						$("#hijoUno").css("background-color", "#eeeeee");
						$("#radioUno").attr("checked", false);
					}
				});
				$("#padreDos").change(function(){
					if ($(this).is(":checked")) {
						$("#hijoDos").css("background-color", "#ff9800");
						$("#radioUno").attr("checked", false);
						$("#radioTres").attr("checked", false);
						$("#radioDos").attr("checked", true);
						/*$("#padreUno .lever:before").css("right":"18px");
						$("#padreTres .lever:before").css("right":"18px");*/
					} else{
						$("#hijoDos").css("background-color", "#eeeeee");
						$("#radioDos").attr("checked", false);
					}
				});
				$("#padreTres").change(function(){
					if ($(this).is(":checked")) {
						$("#hijoTres").css("background-color", "#ff9800");
						$("#radioUno").attr("checked", false);
						$("#radioDos").attr("checked", false);
						$("#radioTres").attr("checked", true);
						/*$("#padreUno .lever").css("left":"18px");
						$("#padreDos .lever").css("left":"18px");*/
					} else{
						$("#hijoTres").css("background-color", "#eeeeee");
						$("#radioTres").attr("checked", false);
					}
				});
			
});