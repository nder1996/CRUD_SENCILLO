
<?php


	require_once ("conexion.php");

	$id = $_GET['id'];

	 $sql = "DELETE FROM clientes WHERE id='$id' ";

	      if (mysqli_query($conn, $sql)) {
            echo "delete successfully";
            header("Location: index.php");

            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);


?>
