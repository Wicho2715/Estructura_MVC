<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="whidth=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Marca</td>
                <td>Cantidad</td>
                <td>Fecha de caducidad</td>
                <td>Contenido</td>
                <td>Estado</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($productos as $producto){
                    echo "<tr>";
                    echo "<td>". $producto['id'] ."</td>";
                    echo "<td>". $producto['nombre'] ."</td>";
                    echo "<td>". $producto['marca'] ."</td>";
                    echo "<td>". $producto['cantidad'] ."</td>";
                    echo "<td>". $producto['fecha_caducidad'] ."</td>";
                    echo "<td>". $producto['contenido'] ."</td>";
                    echo "<td>". $producto['estado'] ."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
