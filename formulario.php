<!DOCTYPE html>

<?php 
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
    include("create.php");
?>
    <br> <br>

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
                    <input type="password" name='password' class="form-control" id="password" placeholder="Contraseña" minlength="6" maxlength="50" required>
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
                    <input type="text" name='telefono' class="form-control" id="telefono" placeholder="Telefono/celular" maxlength="15" required>
                </div>

                <div class="form-group col-md-3">
                    <label for="residencia">Residencia</label>
                    <input type="text" name="residencia" class="form-control" id="residencia" placeholder="Lugar de residencia" maxlength="20" required>
                </div>
            </div>
        </div>

        <div class="container"> 
            <div class="form-row justify-content-center">
                <div class="form-group col-md-2">
                    <input type="submit" name="confirmar" class="btn btn-primary" value="Confirmar datos">
                </div>
            </div>
        </div> 
        </form>
    </div>

    <br> <br> <br> <br>


</body>
</html>