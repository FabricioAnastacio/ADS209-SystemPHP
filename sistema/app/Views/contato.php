<?= $this->extend('layout/main') ?>
<?= $this->section('conteudo') ?>
<h1>
    <?= $Conteudo['Titulo']; ?>
</h1>
<p>
    <?= $Conteudo['Texto']; ?>
</p>
<?= $this->endSection() ?>