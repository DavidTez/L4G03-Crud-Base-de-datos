<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <form>
    <table >
        <tr>
            <td>id</td>
            <td>nombre</td>
            <td>email</td>
        </tr>
        <tr >
            <?php
            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "personas";
            $con = new mysqli($host, $user, $password, $db);
            $query="select * from persona";
            $ingreso=$con->query($query);
            while($imp=mysqli_fetch_array($ingreso)){
            ?>
            <td><?php echo $imp['id']?></td>
            <td><?php echo $imp['nombre']?></td>
            <td><?php echo $imp['email']?></td>
        </tr>
            <?php 
            }
            
            ?>
    </table>
    </form>
    <form action="crear.php">
    <div>
        <br>
        <button type="submit">Agregar</button>
    </div>
    </form>
</body>
</html>