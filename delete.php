<br> <br> <br>
<hr class="col-xs-12">
<?php   
    if(isset($_GET['delete'])){
            $delete_id= $_GET['delete'];
            $delete = "DELETE FROM usuarios WHERE id='$delete_id'";
            $ejecutar = mysqli_query($link, $delete);
            
            if($ejecutar){ 
                echo "<script> alert('Se eliminaron los datos!')</script>";
                echo "<script> window.open('formulario.php', '_self')</script>";
            }
        }
