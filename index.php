<?php
include_once 'conexion.php';

$sql = "SELECT *FROM clientes ORDER BY id DESC";

$resultado = $conn->query($sql);




/*$sentencia_select = $conn->prepare('SELECT *FROM clientes ORDER BY id DESC');
$sentencia_select->execute();
$resultado = $sentencia_select->fetchAll();*/



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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Agregar</button>
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
                    <th scope="col">DEPARTAMENTO</th>
                    <th scope="col">CIUDAD</th>
                    <th scope="col">CORREO</th>
                    <th scope="col">ACCION</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultado as $key=>$fila) : ?>
                <tr>
                    <th class="info_table">
                        <?php echo $fila['id']; ?>
                    </th>
                    <th class="info_table">
                        <?php echo $fila['nombre']; ?>
                    </th>
                    <th class="info_table">
                        <?php echo $fila['apellido']; ?>
                    </th>
                    <th class="info_table">
                        <?php echo $fila['telefono']; ?>
                    </th>
                    <th class="info_table">
                        <?php echo $fila['departamento']; ?>
                    </th>
                    <th class="info_table">
                        <?php echo $fila['ciudad']; ?>
                    </th>
                    <th class="info_table">
                        <?php echo $fila['correo']; ?>
                    </th>
                    <th><a href="update.php?id=<?php echo $fila['id']; ?>" class="btn btn-primary">Editar</a>
                        <a href="delete.php?id=<?php echo $fila['id']; ?>" class="btn btn-danger">Eliminar</a>
                    </th>
                    <th>
                        <?php
                            echo $key
                        ?>
                    </th>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar" data-bs-whatever="@mdo">Open modal for @mdo</button>
        <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="Formulario_Editar" action="edit.php" method="POST">
                            <section class="seccion_1">
                                <label>Nombre</label>
                                <div class="input-group mt-3">
                                    <span class="valid_nombre icon_nombre input-group-text" id="inputGroupPrepend2"><i class="bi bi-person-square"></i></span>
                                    <input name="nombre" type="text" class="valid_nombre form-control" id="Nombre" aria-describedby="inputGroupPrepend2" placeholder="Nombre">
                                </div>
                                <label class="label_mensaje" id="label_nombre"></label>
                            </section>
                            <section class="seccion_2">
                                <label>Apellido</label>
                                <div class="input-group mt-3">
                                    <span class="valid_apellido icon_apellido input-group-text" id="inputGroupPrepend2"><i class="bi bi-person-square"></i></span>
                                    <input name="apellido" type="text" class="valid_apellido form-control" id="Apellido" aria-describedby="inputGroupPrepend2" placeholder="Apellido">
                                </div>
                                <label id="label_apellido"></label>
                            </section>
                            <section class="seccion_3">
                                <label>Telefono</label>
                                <div class="input-group mt-3">
                                    <span class="valid_telefono icon_telefono input-group-text" id="inputGroupPrepend2"><i class="bi bi-phone"></i></span>
                                    <input name="telefono" type="text" class="valid_telefono form-control" id="Telefono" aria-describedby="inputGroupPrepend2" placeholder="Telefono">
                                </div>
                                <label class="label_mensaje" id="label_telefono"></label>
                            </section>
                            <section class="seccion_4">
                                <label>Email</label>
                                <div class="input-group mt-3">
                                    <span class="valid_email icon_email input-group-text" id="inputGroupPrepend2"><i class="bi bi-envelope"></i></span>
                                    <input name="email" type="text" class="valid_email form-control" id="Email" aria-describedby="inputGroupPrepend2" placeholder="Email">
                                </div>
                                <label class="label_mensaje" id="label_email"></label>
                            </section>
                            <div class="col-md-4 mt-2">
                                <label for="departamento_colombia" class="Colombia_D form-label mt-3 mb-3">Departamento</label>
                                <select id="departamento_colombia" name="departamento_colombia" class="Departamento form-select">
                                </select>
                                <label class="label_mensaje" id="departamento"></label>
                            </div>
                            <div class="col-md-4 mt-0">
                                <label for="ciudad_colombia" class="Colombia_C form-label mt-3 mb-3">Ciudad</label>
                                <select id="ciudad_colombia" name="ciudad_colombia" class="Ciudad form-select">
                                </select>
                                <label id="ciudad" for=""></label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <input type="submit" class="Nuevo_Cliente btn btn-primary" value="Agregar Cliente">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-center" id="exampleModalLabel">Nuevo Cliente</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="Formulario_Agregar" action="insert.php" method="POST">
                            <section class="seccion_1">
                                <label>Nombre</label>
                                <div class="input-group mt-3">
                                    <span class="valid_nombre icon_nombre input-group-text" id="inputGroupPrepend2"><i class="bi bi-person-square"></i></span>
                                    <input name="nombre" type="text" class="valid_nombre form-control" id="Nombre" aria-describedby="inputGroupPrepend2" placeholder="Nombre">
                                </div>
                                <label class="label_mensaje" id="label_nombre"></label>
                            </section>
                            <section class="seccion_2">
                                <label>Apellido</label>
                                <div class="input-group mt-3">
                                    <span class="valid_apellido icon_apellido input-group-text" id="inputGroupPrepend2"><i class="bi bi-person-square"></i></span>
                                    <input name="apellido" type="text" class="valid_apellido form-control" id="Apellido" aria-describedby="inputGroupPrepend2" placeholder="Apellido">
                                </div>
                                <label id="label_apellido"></label>
                            </section>
                            <section class="seccion_3">
                                <label>Telefono</label>
                                <div class="input-group mt-3">
                                    <span class="valid_telefono icon_telefono input-group-text" id="inputGroupPrepend2"><i class="bi bi-phone"></i></span>
                                    <input name="telefono" type="text" class="valid_telefono form-control" id="Telefono" aria-describedby="inputGroupPrepend2" placeholder="Telefono">
                                </div>
                                <label class="label_mensaje" id="label_telefono"></label>
                            </section>
                            <section class="seccion_4">
                                <label>Email</label>
                                <div class="input-group mt-3">
                                    <span class="valid_email icon_email input-group-text" id="inputGroupPrepend2"><i class="bi bi-envelope"></i></span>
                                    <input name="email" type="text" class="valid_email form-control" id="Email" aria-describedby="inputGroupPrepend2" placeholder="Email">
                                </div>
                                <label class="label_mensaje" id="label_email"></label>
                            </section>
                            <div class="col-md-4 mt-2">
                                <label for="departamento_colombia" class="Colombia_D form-label mt-3 mb-3">Departamento</label>
                                <select id="departamento_colombia" name="departamento_colombia" class="Departamento form-select">
                                </select>
                                <label class="label_mensaje" id="departamento"></label>
                            </div>
                            <div class="col-md-4 mt-0">
                                <label for="ciudad_colombia" class="Colombia_C form-label mt-3 mb-3">Ciudad</label>
                                <select id="ciudad_colombia" name="ciudad_colombia" class="Ciudad form-select">
                                </select>
                                <label id="ciudad" for=""></label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <input type="submit" class="Nuevo_Cliente btn btn-primary" value="Agregar Cliente">
                            </div>
                        </form>
                        <!----->
                        <!----->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="js/Jquery.js"></script>
</body>

</html>