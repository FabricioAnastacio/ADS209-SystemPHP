<?= $this->extend('layout/main') ?>
<?= $this->section('conteudo') ?>
<div class="primeira-secao">
    <div class="Titulo">
        <h1>
            <?= $Conteudo['Titulo']; ?>
        </h1>
        <p>
            <?= $Conteudo['Texto']; ?>
        </p>
    </div>
</div>
<div class="segunda-secao">
    <div class="img-titulo">
        <img src="https://i0.wp.com/segredosdomundo.r7.com/wp-content/uploads/2021/11/bandeira-do-brasil.png?w=1535&ssl=1" alt="Bandeira Brasil">
    </div>
</div>
<?= $this->endSection() ?>