
<?php

        require_once ("conexion.php");

        echo "Connected successfully";

          $nombre   = $_POST['nombre'];
          $apellido = $_POST['apellido'];
          $email   = $_POST['email'];
          $telefono   = $_POST['telefono'];
          $departamento_colombia = $_POST['departamento_colombia'];
          $ciudad_colombia = $_POST['ciudad_colombia'];



          $sql = "INSERT INTO clientes (nombre,apellido,telefono,departamento,ciudad,correo) VALUES ('$nombre','$apellido','$telefono','$departamento_colombia','$ciudad_colombia','$email') ";

        
          if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            header("Location: index.php");

            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);

     
?>
 
