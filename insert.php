<?php
            $servername = "localhost";
            $database = "clientes";
            $user = "root";
            $password = "";

            // Create connection
            $conn = mysqli_connect($servername, $user, $password, $database);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
          }
          echo "Connected successfully";


          //echo "<script>console.log(nombre,apellido,telefono,departamento_colombia,ciudad_colombia,correo)</script>";

          $sql = "INSERT INTO clientes (nombre,apellido,telefono,departamento,ciudad,correo) VALUES ('nombre','apellido','telefono','departamento_colombia','ciudad_colombia','correo') ";

          

          //$sql = "INSERT clientes ('nombre','apellido','telefono','departamento_colombia','ciudad_colombia','correo') VALUES (nombre,apellido,telefono,departamento,ciudad,correo)";
        
          if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);








           
?>
 
