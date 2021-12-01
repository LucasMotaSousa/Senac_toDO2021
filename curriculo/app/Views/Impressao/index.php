<!DOCTYPE html>
<html lang="en">
    <?=helper('util')?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.min.css')?>">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Curriculum Vitae</h1>
    <div class="container">
        <h2>Dados Pessoais</h2>
        <div  class="card container-md mt-2 p-3 h3" id="dadospessoais" styler="width:18rem;">
        <div>
            Nome: <?=$nome?>
        </div>
        <div >
            Data de Nascimento: <?php echo formataData($nacimento)?>
        </div>
        <div>
            Genero: <?=$sexo?>
        </div>
        <div>
            Estado Civil: <?=$civil?>
        </div>
        </div>
        <h2>Endereço</h2>
        <div class="card container-md mt-2 p-3 h3" id="endereco">
            <?=$endereco?>
        </div>
        <h2>Experiencia</h2>
        <div class="card container-md mt-2 p-3 h3" id="experiencia">
            <?=$experiencia?>
        </div>
        <h2>Formação</h2>
        <div class="card container-md mt-2 p-3 h3" id="formacao">
            <?=$formacao?>
        </div>
        <h2>Habilidades</h2>
        <div class="card container-md mt-2 p-3 h3" id="habilidade">
            <?=$habilidade?>
        </div>
        <h2>Objetivos</h2>
        <div class="card container-md mt-2 p-3 h3" id="objetivo">
            <?=$objetivo?>
        </div>
    </div>
    <div class="btn imprimir btn-success">Imprimir</div>
    <script src="<?= base_url('/assets/js/nav.js')?>"></script>
</body>
</html>