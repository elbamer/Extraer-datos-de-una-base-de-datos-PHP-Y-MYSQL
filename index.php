<?php

$conexion = mysqli_connect('localhost', 'elba', '', 'ejerciciosdaw');
$conexion->set_charset("utf8");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar Datos</title>
    <link rel="stylesheet" type="" href="estilo.css">
</head>
<body>
    <h1>Mostrando los datos de una base de datos</h1>
    <table>
        <tr>
            <th>DNI</th>
            <th>NOMBRE</th>
            <th>POBLACION</th>
            <th>DIRECCION</th>
            <th>TELEFONO</th>
        </tr>
        <tr>
            <?php
            //include("funcionCaracteresespeciales.php");
            $sql = "SELECT * FROM alumnos";
            $result = mysqli_query($conexion, $sql);
            // for($i=0;$i<$lista_alumnos;$i++){     
            while ($mostrar = mysqli_fetch_array($result)) {
                ?>
            <tr>
                <td><?php echo $mostrar['DNI'] ?></td>
                <td><?php echo $mostrar['APENOM'] ?></td>
                <td><?php echo $mostrar['DIREC'] ?></td>
                <td><?php echo $mostrar['POBLA'] ?></td>
                <td><?php echo $mostrar['TELEF'] ?></td>
            </tr>
                    <?php
        }
        ?>
    </table>
</body>
</html>