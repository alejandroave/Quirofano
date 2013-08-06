<?php
# Variables con los colores
  $cPrimario  = '#2c678a';
  $clinks     = '#000099';

?>
  /* Estilos Globales */
  body {
    background: #f2f2f2;
  }

  .centerText { text-align: center }

  /* Estilo del encabezado*/

  header {
    background: #79919e;
    background-image: -moz-linear-gradient(top, #79919e, #667d8a 27px, #667d8a 27px, #84a1b3); /**/
    /*height: 120px; /**/
  }

    header #logo{
      background: url("/images/hu.png");
      /*border-radius: 50px;*/
      /*border: 2px solid black;*/
      float: left;
      margin-right: 5px;
      margin-top: 10px;
      width: 90px;
      height: 90px;
    }

    header h1#siga {
    text-shadow: #313c42 2px 2px 4px;
      color: white;
      font-size: 55px;
      font-weight: 500;
      margin-top: 0;
      padding: 12px 0 0;
      text-align: center;
    }

    header #desc {
    text-shadow: #313c42 2px 2px 4px;
      color: white;
      font-size: 16px;
      padding-top: 34px;
    }

    header ul {
      float: right;
      left: 0px;
      position: relative;
      top: 0px;
      /* padding-top: 98px; /**/
    }

    header ul li {
      /*display: inline; /**/
      float: left;
      /* margin-top: 96px; /**/
    }

    header ul li a {
      border-radius: 5px 5px 0 0;
      background: #8f8579;
      color: white;
      display: block;
      font-weight: bold;
      margin-right: 10px;
      padding: 5px 0;
      text-align: center;
      text-decoration: none;
      width: 60px;
    }


  #sfcontent table#index {
    float: left; /**/
  }

  /*table {
    font-size: 12px;
  } /**/

/* Estilo de las etiquetas del menu */
  /* body {
    border: 1px solid black;
  } /**/

  table#index {
    border-left: 1px solid;
    border-right: 1px solid;
    border-bottom: 1px solid;
    border-color: #8f8679;
    border-radius: 2px;
    font-size: 1.2em;
    /* margin-left: 17px; /**/
    margin-top: 0px;
    width: 100%;
  }

  table a,
  table#index a{
    color: <?php echo $cPrimario ?>;
  }

  table thead tr th{
    background: #EAE5E1;
    /* border-radius: 5px; /**/
    color: #233945;
    padding-left: 20px;
    padding-right: 15px;
    margin-top: 6px;
  }


  table tbody tr td{
    color: #446e85;
    padding-left: 20px;
    padding-right: 15px;
    padding-bottom: 2px;
  }

  table tbody tr th{
   color: #233945;
   text-align: right;
  }

  table tbody tr td a,
  table#index tbody tr td a {
    color: <?php echo $clinks ?>;
    text-decoration: none;
  }

  #newForm {
    margin-top: 70px;
  }

  #index tbody tr td{
    border-bottom: 1px dashed;
    border-color: #b8b4b0;
    background: white;
  }

 #menu {
    background: #84A1B3;
    width: 100%;

  }
  #menu ul li {
    float: left;
    margin-top:10px;
  }


  #menu ul li a {
    color: #eae5e1;
    border-radius: 5px 5px 0px 0px;
    background: #667D8A;
    /*background-image: -moz-linear-gradient(top, #8f8679, #756e64 27px, #59544c 27px, #b0a596);*/
    display: block;
    font-weight: bold;
    margin-right: 10px;
    padding: 5px 0;
    text-align: center;
    text-decoration: none;
    width: 60px;
  }

/* Espacio de los datos del usuario */

  #datos {
    float: left;
    height: 50px;
    width: 67%;
    /* display: inline; /**/
  }

  #datos {
    border: 1px solid;
    border-color: white;
    border-radius: 10px 10px 10px 10px;
    background: #8f8679;
    background-image: -moz-linear-gradient(top, #8f8679, #59544c);
    margin-right: 10px;
    margin-top:10px;
    padding: 10px 10px;
    text-align: left;
    font-size: 12px;
  }

  #datos div {
    color: White;
    float: center;
  }

  #datos #nombre {
    color: White;
    /*background: #8f8679;*/
    width: 200px;
    font-size: 20px;
  }

  #datos #numero {
    color: White;
    /*background: #8f8679;*/
    font-size: 18px;
    float: right;
  }

  #datos #turno {
   color: White;
   /*background: #8f8679;*/
   float: right;
  }

  /* Estilo de la barra de menu principal*/

  #main-nav {
    /*background: White;
    border: 1px solid;
    border-color: #8f8679;*/
    box-shadow: 5px 5px 5px #aaaaaa;
    margin: 10px 0 30px 0;
    height: 300px;
    /* border-radius: 10px; /**/
    float: left;
    /* width: 150px; /* El ancho lo da el padre con grid_3 */
  }

    #main-nav ul {
      margin: 0;
      font-size: 1.1em;
    }

    #main-nav li {
      border-bottom: 1px dotted gray;
      margin: 2px -20px 0;
    }

    #main-nav li a {
      display: block;
      font-weight: bold;
      text-decoration: none;
      padding: 2px 15px;
    }

    #main-nav li a:hover {
      background: grey;
      color: #EEEEEE;
    }

  #subm {
    color: white;
    background: #8f8679;
    background-image: -moz-linear-gradient(top, #8f8679, #756e64 27px, #59544c 27px, #b0a596);
    border-radius: 5px;
    margin: 10px;
    padding: 5px;
    text-align: right;

  }

  #opcion {
    text-align: right;
    padding-top: 5px;
    padding-right: 10px;
  }

  #opcion li {
  /*color: #233945;*/
  /*border-bottom: 1px dashed;*/
  /*border-color: #233945;*/
  }

  #opcion li a{
  color: #233945;
  }
  /* estilo del apartado AYUDA*/

  #help {
    background: White;
    border: 1px solid;
    border-color: #8f8679;
    /*box-shadow: 3px 3px 3px #aaaaaa;*/
    margin-top: 10px;
    margin-left: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    width: 29%;
    height: 70px;
    border-radius: 10px;
    float: right;
  }

  #thelp {
    color: White;
    background: #8f8679;
    background-image: -moz-linear-gradient(top, #8f8679, #756e64 27px, #59544c 27px, #b0a596);
    border-radius: 5px;
    margin: 4px;
    font-size: 20px;
    text-align: center;
  }

  #tthelp {
    color: #37596b;
    background: #eae5e1;
    border-radius: 5px;
    margin: 10px;
    font-size: 14px;
    text-align: center;
  }

  /* estilo del footer*/

  #text {
    text-align: center;
    background: white;
  }

  input,
  /* input[type="text"],
  input[type="password"],
  input[type="file"],
  input[type="submit"], /**/
  textarea,
  button,
  select
  {
    font-size: 0.9em;
  }

  #sfcontent h1 {
    background: #84A1B3;
    clear: both;
    color: white;
    float: left;
    font-size: 2.5em;
    margin-top: 0;
    text-align: center;
    width: 100%;
}
