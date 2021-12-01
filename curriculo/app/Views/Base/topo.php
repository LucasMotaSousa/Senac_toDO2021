<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <title>Projeto Integrador - PI2021</title>



  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
</style>
<link href="<?= base_url('/assets/css/nav.css')?>" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-md">
  <a class="navbar-brand" href="<?= base_url() ?>" >PI 2021 - Curriculo Online</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="navbarsExample01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <!-- <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a> -->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('sobre') ?>">Sobre Curriculo </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-expanded="false">Menu</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Modelo de Curriculo</a>
          <a class="dropdown-item" href="<?= base_url('navegacao') ?>">Faça seu Curriculo</a>
          <a class="dropdown-item" href="<?= base_url('login') ?>">Acesse sua Conta Aqui!</a>
      
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Crie sua Conta! </a>
      </li>
    </ul>
    <form class="form-inline my-2 my-md-0">
      <input class="form-control" type="text" placeholder="Busque Aqui!" aria-label="Search">
    </form>
  </div>
</nav>