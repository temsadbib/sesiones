<?php
   session_start();
   ?>
<!doctype= html>
<html lang="es">
<head>
<title>Titulo de la página</title>
<meta charset="utf-8">


<!-- Style Sheet -->


<style>
.container {


   display:flex;
   justify-content:center;
}
</style>




</head>
<body>


<div class="container">


<form action="02-action.php">
      


       <!--texto-->
       <!--grupo fieldset-->
       <fieldset>
           <legend>Inserta las credenciales </legend>
              
               <p>
                   <label for="usuari"> Usuario: </label>
                   <input type="text" id="usuari" name="usuari" value="<?= isset($_SESSION["usuari"]) ? $_SESSION["usuari"] : "" ?>"
                       placeholder="Escriba aquí su nombre">
               </p>




               <p>
                   <label for="contraseña"> Contraseña: </label>
                   <input type="text" id="clau" name="clau" value="" placeholder="Escriba aquí su contraseña">
               </p>


              
               <p>
                   <input type="submit" name="enviar" value="Enviar">
               </p>
         
       </fieldset>


   </form>  


</div>


</body>
</html>

