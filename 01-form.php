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

    body{
        background-color: #fffff1;
    }

    legend{
        background-color: #f6f4dd;
        border: 3px solid #e66d90;
        border-radius: 5px; 
    }
    fieldset { 
        background-color: #ffeff4;
        border: 3px solid #e66d90;
    }


</style>




</head>
<body>


<div class="container">


<form action="02-action.php">
      


       <!--texto-->
       <!--grupo fieldset-->
       <fieldset>
           <legend>Inserta las dimensiones de la tabla </legend>
              
               <p>
                   <label for="usuari"> Escriba la cantidad de filas </label>
                   <input type="number" id="usuari" name="filas"
                   min="1" required placeholder="Escribe el número de filas">
               </p>




               <p>
                   <label for="contraseña"> Escriba la cantidad de columnas </label>
                   <input type="number" id="clau" name="columnas" value="" min="1" resquired placeholder="Escribe el número de columnas">
               </p>


              
               <p>
                   <input type="submit" name="accion" value="Dibuja tabla">
               </p>
         
       </fieldset>


   </form>  


</div>


</body>
</html>

