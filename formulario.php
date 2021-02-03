<!DOCTYPE html>

<?php
    ## Conexion con la base de datos.
    include("conexion_db.php");
    ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Basico</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php 
    ## Insertar datos 
    include("create.php");
    ?>
    <br> <br>

    <!-- Formulario -->
    <div class="col-md-8 col-md-offset-2">
        <form method="POST" action="formulario.php">
        <div class="container"> 
            <div class="form-row justify-content-center">
                <div class="form-group col-md-3">
                    <label for="usuario">Usuario</label>
                    <input type="text" name='usuario' class="form-control" id="usuario" placeholder="Nombre de usuario" minlength="5" maxlength="50" required>
                </div>   
                <div class="form-group col-md-3">
                    <label for="password">Contraseña</label>
                    <input type="password" name='password' class="form-control" id="password" placeholder="Contraseña" minlength="5" maxlength="50" required>
                </div>
            </div>
        </div>

        <div class="container"> 
            <div class="form-row justify-content-center">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Correo electronico" maxlength="50" required>
                </div>
            </div>
        </div>

        <div class="container"> 
            <div class="form-row justify-content-center">
                <div class="form-group col-md-3">
                    <label for="telefono">Telefono</label>
                    <input type="text" name='telefono' class="form-control" id="telefono" placeholder="Telefono/celular" maxlength="20" required>
                </div>

                <div class="form-group col-md-3">
                    <label for="domicilio">Domicilio</label>
                    <input type="text" name="domicilio" class="form-control" id="domicilio" placeholder="Lugar de domicilio" minlength="10" maxlength="50" required>
                </div>
            </div>
        </div>

        <div class="container"> 
            <div class="form-row justify-content-center">
                <div class="form-group col-md-2">
                    <input type="submit" name="insertar" class="btn btn-primary" value="Insertar datos">
                </div>
            </div>
        </div> 
        </form>
    </div>

    <!-- Termina formulario -->

    <br> <br> <br> <br>
            
<?php 
    ## Actualizar Datos
    if(isset($_GET['update'])){
        include('update.php');
    }
?>

    <!-- Base de datos -->
    <div class="col-md-8 col-md-offset-2">
        <table class="table table-borderer table-responsive">
            <tr>
                <td>ID</td>
                <td>Usuario</td>
                <td>Password</td>
                <td>Email</td>
                <td>Telefono</td>
                <td>Domicilio</td>
                <td></td>
                <td></td>
            </tr>

            <?php 
                $consulta = "SELECT * FROM usuarios";
                $ejecutar = mysqli_query($link, $consulta);
                
                $i=0;
                while($fila = mysqli_fetch_array($ejecutar)){
                    $id = $fila['id'];
                    $usuario = $fila['usuario'];
                    $password = $fila['password'];
                    $email = $fila['email'];
                    $telefono = $fila['telefono'];
                    $domicilio = $fila['domicilio'];
                    $i++
            ?>
            <tr>
                <td><?= $id; ?></td>
                <td><?= $usuario; ?></td>
                <td><?= $password; ?></td>
                <td><?= $email; ?></td>
                <td><?= $telefono; ?></td>
                <td><?= $domicilio; ?></td>
                <td><a href="formulario.php?update=<?=$id;?>">Editar</a></td>
                <td><a href="formulario.php?delete=<?=$id;?>">Borrar</a></td>
            </tr> 
            <?php } ?>       
        </table>
    </div>

<?php 

    ## Eliminar Datos
    if(isset($_GET['delete'])){
        include('delete.php');
    }

?>
</body>
</html>