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



        /*$database="clientes";
        $user="root";
        $password="";

    try{
        $conn=new PDO('mysql:host=localhost;dbname='.$database,$user,$password);


    }catch(PDOException $e){
        echo "Error".$e->getMessage();
    }
*/



?>