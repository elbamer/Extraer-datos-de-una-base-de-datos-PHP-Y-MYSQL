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
            $result = mysqli_query($conexion, $sql); //

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

            /*     $numero = rand(1, 10);
                        echo "$mostrar[$numero]";*/

            $claves_aleatorias = array_rand($mostrar, 2);
            // echo $mostrar[$claves_aleatorias[0]] . "\n";
            echo "     resultaso      " .  "  " . $mostrar[$claves_aleatorias[0]] . " <br>";
        }

        ?>

    </table>
    <h1 class="prueba">Prueba</h1>
    <table>
        <tr>
            <th class="nombre">NOMBRE</th>

        </tr>

        <?php
        $sql = "SELECT APENOM FROM alumnos ORDER BY  RAND () LIMIT 0, 1";
        $result = mysqli_query($conexion, $sql); //

        // for($i=0;$i<$lista_alumnos;$i++){     
        while ($mostrar = mysqli_fetch_array($result)) {
            ?>

            <tr>
                <td><?php echo $mostrar['APENOM'] ?></td>
            </tr>   
                <?php

                    $random_keys = array_rand($mostrar, 2);
                    echo $mostrar[$random_keys[1]] . "<br>";
                   
                   
                    
            }
    
            ?>
    

    </table>

</body>

</html>