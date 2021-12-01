<main>
<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
    <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <span class="fs-4">Projeto Senac - PI 2021</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="<?= base_url('dados')?>" class="nav-link <?=$ativo === 'dados' ? 'active' : 'text-white'?>" aria-current="page">
          Dados Pessoais
        </a>
      </li>
      <li>
        <a href="<?= base_url('endereco')?>" class="nav-link <?=$ativo === 'endereco' ? 'active' : 'text-white'?>">
          Endereço
        </a>
      </li>
      <li>
        <a href="<?= base_url('experiencia')?>"  class="nav-link <?=$ativo === 'experiencia' ? 'active' : 'text-white'?>">
          Experiencia
        </a>
      </li>
      <li>
        <a href="<?= base_url('formacao')?>" class="nav-link <?=$ativo === 'formacao' ? 'active' : 'text-white'?>">
          Formação
        </a>
      </li>
      <li>
        <a href="<?= base_url('habilidade')?>" class="nav-link <?=$ativo === 'habilidade' ? 'active' : 'text-white'?>">
          Habilidade
        </a>
      </li>
      <li>
        <a href="<?= base_url('objetivo')?>" class="nav-link <?=$ativo === 'objetivo' ? 'active' : 'text-white'?>">
          Objetivo
        </a>
      </li>
      <li>
        <a href="<?= base_url('impressao')?>" class="nav-link text-white btn btn-primary">
          Imprimir
        </a>
      </li>
    </ul>
</div>
<!-- js para ativar menu -->
<script src="<?=base_url('/assets/js/nav.js') ?>"></script>