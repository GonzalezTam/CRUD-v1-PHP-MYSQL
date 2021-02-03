<br> <br> <br>
<hr class="col-xs-12">
<?php   
    if(isset($_GET['update'])){
            $update_id= $_GET['update'];

            $consulta = "SELECT * FROM usuarios WHERE id='$update_id'";
            $ejecutar = mysqli_query($link, $consulta);

            $fila = mysqli_fetch_array($ejecutar);

            $usuario = $fila['usuario'];
            $password = $fila['password'];
            $email = $fila['email'];
            $telefono = $fila['telefono'];
            $domicilio = $fila['domicilio'];
        }
?>

<br> <br> <br> <br>
    <!-- Formulario -->
    <div class="col-md-8 col-md-offset-2">
        <form method="POST" action="">
        <div class="container"> 
            <div class="form-row justify-content-center">
                <div class="form-group col-md-3">
                    <label for="usuario">Usuario</label>
                    <input type="text" name='usuario' class="form-control" id="usuario" value="<?=$usuario;?>" minlength="5" maxlength="50" required>
                </div>   
                <div class="form-group col-md-3">
                    <label for="password">Contraseña</label>
                    <input type="text" name='password' class="form-control" id="password" value="<?=$password;?>" minlength="5" maxlength="50" required>
                </div>
            </div>
        </div>

        <div class="container"> 
            <div class="form-row justify-content-center">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="<?=$email;?>" maxlength="50" required>
                </div>
            </div>
        </div>

        <div class="container"> 
            <div class="form-row justify-content-center">
                <div class="form-group col-md-3">
                    <label for="telefono">Telefono</label>
                    <input type="text" name='telefono' class="form-control" id="telefono" value="<?=$telefono;?>" maxlength="20" required>
                </div>

                <div class="form-group col-md-3">
                    <label for="domicilio">Domicilio</label>
                    <input type="text" name="domicilio" class="form-control" id="domicilio" value="<?=$domicilio;?>" minlength="10" maxlength="50" required>
                </div>
            </div>
        </div>

        <div class="container"> 
            <div class="form-row justify-content-center">
                <div class="form-group col-md-2">
                    <input type="submit" name="actualizar" class="btn btn-warning" value="Actualizar datos">
                </div>
            </div>
        </div> 
        </form>
    </div>

<?php   

    if(isset($_POST['actualizar'])){
            $actualizar_usuario= $_POST['usuario'];
            $actualizar_password= $_POST['password'];
            $actualizar_email= $_POST['email'];
            $actualizar_telefono= $_POST['telefono'];
            $actualizar_domicilio= $_POST['domicilio'];

            $consulta = 
            "UPDATE usuarios SET 
                usuario = '$actualizar_usuario', 
                password = '$actualizar_password',
                email = '$actualizar_email', 
                telefono = '$actualizar_telefono', 
                domicilio = '$actualizar_domicilio' 
            WHERE id='$update_id'";
            
            $ejecutar = mysqli_query($link, $consulta);

        if($ejecutar){ 
            echo "<script> alert('Se actualizaron los datos!')</script>";
            echo "<script> window.open('formulario.php', '_self')</script>";
        }
    } 

