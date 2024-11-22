<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['filas'] = $_POST['filas'];
    $_SESSION['columnas'] = $_POST['columnas'];
}

$filas = $_SESSION['filas'] ?? 1;
$columnas = $_SESSION['columnas'] ?? 1;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Tabla Generada</title>
    <style>
        body {
            background-color: orange;
        }

        table {
            border-collapse: collapse;
        }
        #izquierda{
            text-decoration: none;
            font-weight: bold;
        }
        #derecha{
            text-decoration: none;
            float: right;
            font-weight: bold;
        }
        #principal{
            text-align: center;
        }
        table, th, td {
            border: 2px solid black;
            text-align: center;
            border-top: none;
            border-inline-end-color: purple;
            border-inline-start-color: purple;
            border-bottom-color: red;
        }

        td {
            width: 250px;
        }
        .cuadrado{
            border: 5px solid pink;
            border-radius: 8px;
            width: 55vh;
            text-align: center;
            margin: auto;
            margin-top: 10px;
            background-color: darkkhaki;
        }
        #derecha{
            text-align: right;
        }
      
    </style>
</head>

<body>
    <p id="principal">Tabla</p>
    <table>
        <?php for ($i = 1; $i <= $filas; $i++): ?>
            <tr>
                <?php for ($j = 1; $j <= $columnas; $j++): ?>
                    <td><?php echo "Fil $i Col $j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

    <div class="cuadrado">
        <p>Tamaño de la última tabla solicitada:</p>
        <p>Filas <?php echo $filas; ?></p>
        <p>Columnas <?php echo $columnas; ?></p>
    </div>

        <a id="izquierda" href="ej01-1.php?filas=<?php echo $filas; ?>&columnas=<?php echo $columnas; ?>">&larr; ATRÁS</a>
        <a id="derecha" href="ej01-3.php">Destruye sesión</a>


</body>

</html>