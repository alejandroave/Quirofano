

(function($) {
	$.fn.validationEngineLanguage = function() {};
	$.validationEngineLanguage = {
		newLang: function() {
			$.validationEngineLanguage.allRules = {"required":{    
						"regex":"none",
						"alertText":"* Este campo es obligatorio",
						"alertTextCheckboxMultiple":"* Escoge una opción",
						"alertTextCheckboxe":"* Esta casilla es obligatoria"},
					"length":{
						"regex":"none",
						"alertText":"* Se permiten de ",
						"alertText2":" hasta ",
						"alertText3":" caractéres"},
					"maxCheckbox":{
						"regex":"none",
						"alertText":"* Excedes las casillas permitidas"},	
					"minCheckbox":{
						"regex":"none",
						"alertText":"* Selecciona por favor",
						"alertText2":" Opciones"},		
					"confirm":{
						"regex":"none",
						"alertText":"* Ambos campos no son idénticos"},		
					"telephone":{
						"regex":"/^[0-9\-\(\)\ ]+$/",
						"alertText":"* Número de teléfono no valido"},	
					"email":{
						"regex":"/^[a-zA-Z0-9_\.\-]+\@([a-zA-Z0-9\-]+\.)+[a-zA-Z0-9]{2,4}$/",
						"alertText":"* Dirección de e-mail no valida"},	
					"date":{
            "regex":"/^[0-9]{4}\-\[0-9]{1,2}\-\[0-9]{1,2}$/",
            "alertText":"* Fecha no valida, introduce AAAA-MM-DD por favor"},
					"onlyNumber":{
						"regex":"/^[0-9\ ]+$/",
						"alertText":"* Introduce sólo números"},	
					"noSpecialCaracters":{
						"regex":"/^[0-9a-zA-Z]+$/",
						"alertText":"* No se permiten caractéres especiales"},	
					"onlyLetter":{
						"regex":"/^[a-zA-Z\ \']+$/",
						"alertText":"* Sólo se permiten letras"},
					"ajaxUser":{
						"file":"validateUser.php",
						"alertTextOk":"* Este usuario está disponible",	
						"alertTextLoad":"* Cargando, espera por favor",
						"alertText":"* Este usuario ya no esta disponible"},	
					"ajaxName":{
						"file":"validateUser.php",
						"alertText":"* Este nombre está disponible",
						"alertTextOk":"* Este nombre ya no está disponible",	
						"alertTextLoad":"* Cargando, espera por favor"}	
				}	
		}
	}
})(jQuery);

$(document).ready(function() {	
	$.validationEngineLanguage.newLang()
});