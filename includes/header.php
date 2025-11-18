<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Crud PHP | Wiliam Dida 🍀</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<head>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Crud PHP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <?php if (!empty($_SESSION['id_usuario'])): ?>
          <li class="nav-item">
            <?php if($_SESSION['rol'] == 'caja' || $_SESSION['rol'] == 'administrador'): ?>
            <a class="nav-link active" aria-current="page" href="index.php">Productos</a>
            <?php endif; ?>
          </li>
          <li class="nav-item">
            <?php if($_SESSION['rol'] == 'administrador'): ?>
            <a class="nav-link" href="#">Categorias</a>
            <?php endif ?>
          </li>
          <li class="nav-item">
            <?php if($_SESSION['rol'] == 'caja'): ?>
            <a class="nav-link" href="#">Marcas</a>
             <?php endif ?>
          </li>
          <li class="nav-item">
            <?php if($_SESSION['rol'] == 'caja'): ?>
            <a class="nav-link disabled" href="">Reportes</a>
             <?php endif ?>
          </li>
          <?php endif ?>
        </ul>
      </div>
      <div>
        <ul class="navbar-nav">
          <li>
            <div class="pe-2">
              <?php if (!empty($_SESSION['id_usuario'])): ?>
                <p class="p-0 m-0 small"><?= $_SESSION['nombre'] ?></p>
                <small><?= $_SESSION['rol'] ?></small>
              <?php endif ?>

            </div>
          </li>
          <li>
            <?php if (!empty($_SESSION['id_usuario'])): ?>
              <a class="nav_link" href="logout.php"> Cerrar Sesion</a>
              <?php else: ?>
            <a class="nav-link" href="login.php">login</a>
            <?php endif ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</head>

<body class="">
  <main class="container py-4">