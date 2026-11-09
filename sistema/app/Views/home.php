<?= $this->extend('layout/main') ?>
<?= $this->section('conteudo') ?>
<div class="Cabecalio">
    <div class="Titulo">
        <h1>
            <?= $Conteudo['Titulo']; ?>
        </h1>
        <p>
            <?= $Conteudo['Texto']; ?>
        </p>
    </div>
    <div class="img-titulo">
        <img src="https://i0.wp.com/segredosdomundo.r7.com/wp-content/uploads/2021/11/bandeira-do-brasil.png?w=1535&ssl=1" alt="Bandeira Brasil">
    </div>
</div>
<div>

</div>
<?= $this->endSection() ?>