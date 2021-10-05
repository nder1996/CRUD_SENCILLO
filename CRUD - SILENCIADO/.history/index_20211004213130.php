<?php
        include_once 'conexion.php';
        
        $sentencia_select=$con->prepare('SELECT *FROM clientes ORDER BY id DESC');
        $sentencia_select->execute();
        $resultado=$sentencia_select->fetchAll();   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" integrity="sha512-xnP2tOaCJnzp2d2IqKFcxuOiVCbuessxM6wuiolT9eeEJCyy0Vhcwa4zQvdrZNVqlqaxXhHqsSV1Ww7T2jSCUQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <h2 class="text-center mt-5">CRUD EN PHP CON MYSQL</h2>
    <div class="contenedor mt-5">
            <div class="input_button mt-1 d-flex justify-content-center">
                <section class="">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                    <div class="input-group">
                      <div class="input-group-text"><i class="bi bi-menu-button-wide"></i></div>
                      <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Ingrese Un Nombre">
                    </div>
                </section>
                <section>
                    <button type="button" class="btn btn-primary">Agregar</button>
                </section>
                <section>
                    <button type="button" class="btn btn-secondary">Buscar</button>
                </section>
            </div>
            <table class="table mt-5 table-bordered table-striped">
                <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">NOMBRE</th>
                      <th scope="col">APELLIDO</th>
                      <th scope="col">TELEFONO</th>
                      <th scope="col">CIUDAD</th>
                      <th scope="col">CORREO</th>
                      <th scope="col">ACCION</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($resultado as $fila):?>
                    <tr>
                      <th><?php echo $fila['id']; ?></th>
                      <th><?php echo $fila['nombre']; ?></th>
                      <th><?php echo $fila['apellido']; ?></th>
                      <th><?php echo $fila['telefono']; ?></th>
                      <th><?php echo $fila['ciudad']; ?></th>
                      <th><?php echo $fila['correo']; ?></th>
                      <th><a href="update.php?id=<?php echo $fila['id']; ?>" class="btn btn-primary">Editar</a>
                      <a href="delete.php?id=<?php echo $fila['id']; ?>" class="btn btn-primary">Eliminar</a></th>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
              </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>