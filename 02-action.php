<?php
   session_start();
   ?>
<!doctype= html>
<html lang="es">
<head>
<title>Titulo de la página</title>
<meta charset="utf-8">
<style>
    .container {
    display:flex;
    justify-content:center;
    }
    body{
        background-color: #fadbb6;
    }


    tr:nth-child(odd){
        background-color: white;
    }

    tr:nth-child(even){
        background-color: #fadbb6;
    }

    table, tr{
        border-top: ;
    }

</style>

<!-- Style Sheet -->
</head>
<body>
<div class="container">

<?php
    $columnas = $_REQUEST["columnas"];
    $filas = $_REQUEST["filas"];

    print "<table border=\"1\">\n";
    print "  <caption>Tabla</caption>\n";

    	print "  <tbody>\n";

                     


    	for ($i = 1; $i <= $filas; $i++) {        
        
        	print "    <tr>\n";               
    
                for ($j = 1; $j <= $columnas; $j++) { 
                    print "      <td>Fil $i Col $j</td>\n";   
                }

        	print "    </tr>\n";              
    	
        }


    	print "  </tbody>\n";                      
    
    print "</table>\n";




?>

</div>


<a href="01-form.php"> &#11013; ATRÁS</a>
<a href="03-action-suma.php"> Destrye sesión</a>

</body>
</html>

</html>