<?php
	
	 require_once 'conexion.php';

	     echo "Connected successfully";
			
		  $id   = $_POST['id_edit'];
          $nombre   = $_POST['nombre_edit'];
          $apellido = $_POST['apellido_edit'];
          $email   = $_POST['email_edit'];
          $telefono   = $_POST['telefono_edit'];
          $departamento = $_POST['departamento_colombia_edit'];
          $ciudad = $_POST['ciudad_colombia_edit'];

          $sql = "UPDATE clientes set nombre='$nombre' ,apellido='$apellido',correo='$email' ,telefono='$telefono',departamento='$departamento' ,ciudad='$ciudad' WHERE id='$id' ";  

 		  if (mysqli_query($conn, $sql)) {
            echo "editado created successfully";
            header("Location: index.php");

            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);

     
?>
 




