<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>



 <form action="buscar.php" method="post">
<input type="text" name="buscar" id="">
<input type="submit" value="buscar">
<a href="nuevo.php">Nuevo</a>

 </form>   
    </div>

    <div>
        <table>

        <tr>
            <td>ID</td>
            <td>Nombres</td>
            <td>Apellidos</td>
            <td>Grupo</td>
            <td>Matricula</td>
            <td>Correo</td>
            <td>Contraseña</td>
            <td>Comentarios</td>    


        </tr>

        <?php
        $cnx = mysqli_connect("localhost","root","password","db","dbprueba");
        $sql = "SELECT ID, nombre, apelllido, grupo, matricula, correo, contra, comentario FROM talumno order by ID desc";
            while ($mostrar = mysqli_fetch_row($rta)) {
                ?>
                <tr>
                    <td><?php echo $mostrar['0'] ?></td>
                    <td><?php echo $mostrar['1'] ?></td>
                    <td><?php echo $mostrar['2'] ?></td>
                    <td><?php echo $mostrar['3'] ?></td>
                    <td><?php echo $mostrar['4'] ?></td>
                    <td><?php echo $mostrar['5'] ?></td>
                    <td><?php echo $mostrar['6'] ?></td>
                    <td><?php echo $mostrar['7'] ?></td>
                    <td><?php echo $mostrar['8'] ?></td>

                </tr>
                <?php
            }
                     ?>
        </table>

    </div>
</body>
</html>