<?php
    if(isset($_POST['confirmar'])){
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $residencia = $_POST['residencia'];

        $insert = "INSERT INTO usuarios (usuario,contraseña,email,telefono,pais_residencia)VALUES('$usuario','$password','$email', '$telefono', '$residencia')";
        $ejecutar = mysqli_query($link, $insert);

        
        if($ejecutar){
            echo "<h4 class='alert alert-success' role='alert'> Muchas gracias! <h4>";
        } else{
            echo "<h4 class='alert alert-danger' role='alert'> Upps.. error! <h4>" . mysqli_error($link);
        };
    }

        #Si se insertan los datos a la DB correctamente sale un cartel verde, caso contrario sale un cartel rojo de error.