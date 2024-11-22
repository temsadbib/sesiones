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


//recibo los datos del formulario inicial
if ( isset($_REQUEST["usuari"]) && isset($_REQUEST["clau"]) ) {
   


   $usuari = trim(htmlspecialchars(strip_tags($_REQUEST["usuari"]), ENT_QUOTES, "UTF-8"));
   $clau = trim(htmlspecialchars(strip_tags($_REQUEST["clau"]), ENT_QUOTES, "UTF-8"));
   //resumen de la contraseña que ha escrito el usuario
   $clau_hash = hash("sha256",$clau);




   //variables de sesión
   $_SESSION["usuari"]=$usuari;
   $_SESSION["resumen"]= $clau_hash;






  
   //resumen de la contraseña almacenado en una base datos
   $hash_compartida = hash("sha256","root");
   //print "<p>El hash de la clave compartida 'root' con algoritmo sha256 es: $hash_compartida </p>\n";




   print "<p>El usuario introducido es: $usuari </p>\n";
   print "<p>La contraseña introducida es: $clau ( $clau_hash )</p>\n";


  


   if ( $clau_hash  == $hash_compartida){
      
       print "<p>Las contraseña introducida coincide con $hash_compartida </p>\n";
       ?>




       <form action="03-action-suma.php">


           <fieldset>
               <legend>Lista de articulos que desea comprar</legend>




           <!--checkboxes-->
           <p>
               <label for="casilla1">Bolígrafo rojo 0,45€</label>
               <input type="checkbox" id="casilla1" name="articulo['Boli_rojo']" value="0.45">
           </p>


           <p>
               <label for="casilla2">Bolígrafo negro 0,35€</label>
               <input type="checkbox" id="casilla2" name="articulo['Boli_negro']" value="0.35">
           </p>


           <p>
               <label for="casilla3">Bolígrafo azul 0,25€</label>
               <input type="checkbox" id="casilla3" name="articulo['Boli azul']" value="0.25">
           </p>


           <p>
               <input type="submit" name="enviar" value="Compra">
           </p>


           </fieldset>
       </form>  




       <?php
       } else {
           print "<p>Las contraseña introducida NO coincide con $hash_compartida </p>\n";


           }




   //no recibo datos del formulario pero hay variables de sesion
   } elseif ( isset( $_SESSION["resumen"]) ){


       if ($_SESSION["resumen"] == hash("sha256","root")){


           print "<p> Estás dentro de la aplicacion <strong>". $_SESSION["usuari"] ."</strong> (";


           print $_SESSION["resumen"] .") </p>\n";


           }
      




       }




?>
  
<a href="01-form.php"> &#11013; ATRÁS</a>


</body>
</html>

</html>