<!DOCTYPE html>
<html lang="en">
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
<body class="text-center">    
    <form class="form-login" method='post'>
        <h1 class="h3 mb-3 font-weight-normal">Acesse sua Conta Aqui!</h1>
    <label for="inputEmail" class="sr-only">Email</label>
    <input type="email" id="inputEmail" name='inputEmail' class="form-control" placeholder="Email" required autofocus>
    <label for="inputPassword" class="sr-only">Senha</label>
    <input type="password" id="inputPassword" name='inputPassword' class="form-control" placeholder="Senha" required>
    <div class="checkbox mb-3">
        <label>
        <input type="checkbox" value="remember-me"> Lembre-se
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
    <?php $msg = session()->getFlashData('msg') ?>
        <?php if (!empty($msg)) : ?>
            <div class="alert alert-danger">
                <?php echo $msg ?>
            </div>
        <?php endif; ?>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
       
</form>
  </body>
</html>