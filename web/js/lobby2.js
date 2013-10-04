// Definicion del objeto ventana

var Windowobject = function(elemento) {
// *************************************************************
//                    DEFINICION DE PROPIEDADES
// *************************************************************
//Definicion de propiedades privadas
  var estado = 1;

//Definicion de propiedades publicas
  this.titulo = new String();  // titulo que mostrara la ventana
 

// *************************************************************
//                       DEFINICION DE METODOS
// ************************************************************* 
// Definir el estado de la ventana
  this.function maximizar() {
    estado = 2
  }
  
  this.function minimizar() {
    estado = 0
  }
  
  this.function getid(){
    return elemento.id;
  }
}