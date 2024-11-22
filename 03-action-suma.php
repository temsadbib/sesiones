<?php
   session_start();
   ?>
<!doctype= html>
<html lang="es">
<head>
<title>Titulo de la página</title>
<meta charset="utf-8">


<!-- Style Sheet -->


</head>
<body>


<?php


if ( isset($_REQUEST["articulo"]) ) {
  
   $articulo= $_REQUEST["articulo"];
  
  
   $resumen=$_SESSION["resumen"];
   //resumen almacenado en la base de datos
   $hash_compartida = hash("sha256","root");


   if ( $resumen == $hash_compartida){
      
       print "<p>El usuario está autentidado correctamente</p>\n";




       if (is_array($articulo)){
           $suma=0;


           foreach ( $articulo as $nombre => $valor){
               echo "<p>$nombre = $valor &euro;</p>\n";
               $suma = $suma + $valor;
               }
           echo "<p>Suma total de la compra: $suma &euro; </p>\n";


           }


       } else {
           print "<p>Las contraseña introducida NO coincide</p>\n";


           }


   }


?>


<a href="02-action.php"> &#11013; ATRÁS</a>


</body>
</html>
