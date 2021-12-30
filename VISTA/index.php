<?php
include '../CONTROLADOR/conexion.php';
include '../MODELO/R_CONTACTO.php';
?>
 
<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../style.css">
  <link rel="shortcut icon" href="../img/icono.ico" />
  <title>Clinica Integral</title>
</head>

<body>

  <!--Barra de navegacion-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <div class="container">
          <img src="../img/Logo.png" alt="" height="40">
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto gap-4">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">V<strong>0.10</strong></a>
          </li>


          <li class="nav-item">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
              <label class="form-check-label" for="flexSwitchCheckDefault"></label>
            </div>
          </li>

          <li class="nav-item">
            <img src="../img/man.png" style="width: 40px;" class="rounded-circle" alt="...">
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--titulo de la tabla-->
  <h1 class="nombre">GESTION DE USUARIOS</h1>
  <!--imagen-->

  <!-- Button trigger modal -->
  <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
    <img src="../img/user.png" style="width: 50px;" class="rounded-circle" alt="...">
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrar usuario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!--inicio-->
          <form  method="post">
          <div class="mb-3">
         
            <div class="mb-3">
              <input type="text" name="nombre" class="form-control" placeholder="Nombre" aria-label="nombre">
            </div>

            <div class="mb-3">
              <input type="text" name="usuario" class="form-control" placeholder="Usuario" aria-label="usuario">
            </div>

            <div class="mb-3">
              <input type="text" name="rol_id" class="form-control" placeholder="Rol" aria-label="rol_id">
            </div>

            <div class="mb-3">
              <input type="text" name="estado" class="form-control" placeholder="Estado" aria-label="estado">
            </div>


            <div class="mb-3">
              <input type="email" name="email" class="form-control" placeholder="Email" aria-label="3mail">
            </div>

            <div class="mb-3">
              <input type="text" name="contrasena" class="form-control" placeholder="contraseña" aria-label="contrasena">
            </div>
            <div class="modal-footer">
              <button type="submit" name="registrar" class="btn btn-outline btn-success form-control" style="background-color: #58d87c;">Registrar</button>
              <button type="button" class="btn btn-danger form-control" data-bs-dismiss="modal">Cerrar</button>
            </div>
          </form>



        </div>
      </div>
    </div>
  </div>


  <br>
  <br>
  <!--Tabla-->

  <div class="contenedor">
    <table class="table bg-white table-striped">
      <thead>
        <tr style="color: rgb(6, 218, 218);">
          <th scope="col">Nombre</th>
          <th scope="col">Usuario</th>
          <th scope="col">Rol</th>
          <th scope="col">Estado</th>
          <th scope="col">Email</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Alejandro</th>
          <td>User1</td>
          <td>Administrador</td>
          <td>Activo</td>
          <td>alejandro@gmail.com</td>
          <td><img src="../img/lapiz.png" style="width: 20px;" alt=""></td>
        </tr>
        <tr>
          <th scope="row">Jose</th>
          <td>User1</td>
          <td>Administrador</td>
          <td>Activo</td>
          <td>jose@gmail.com</td>
          <td><img src="../img/lapiz.png" style="width: 20px;" alt=""></td>
        </tr>
        <tr>
          <th scope="row">Fernando</th>
          <td>User1</td>
          <td>Administrativo</td>
          <td>Inactivo</td>
          <td>fernando@gmail.com</td>
          <td><img src="../img/lapiz.png" style="width: 20px;" alt=""></td>
        </tr>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>