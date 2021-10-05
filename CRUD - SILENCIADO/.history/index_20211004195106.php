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
        <form class="row row-cols-lg-auto g-3 align-items-center">
            <div class="col-12">
              <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
              <div class="input-group">
                <div class="input-group-text"><i class="bi bi-list"></i></div>
                <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">+ Nuevo</button>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-info">Buscar</button>
              </div>
          </form>
        <!--
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons">
            <button class="btn btn-outline-secondary" type="button"><i class="bi bi-search mr-5"></i></button>
            <button class="btn btn-outline-secondary" type="button"><i class="bi bi-file-earmark-plus"></i></button>
          </div>
        <div class="">
            <i class="bi bi-alarm"></i>
        </div>
        -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>