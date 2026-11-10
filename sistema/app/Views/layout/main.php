<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $conteudo['Titulo'] ?? 'Meu Site'; ?></title>
        <!-- O base_url() aponta diretamente para a pasta /public/ -->
        <link rel="stylesheet" href="<?= base_url('assets/css/estilos.css') ?>">
    </head>
    <body>
        <header>
            <div class="Title-inicial">
                <div class="secao">
                    <p>
                        terça-feira
                        10 novembro 2026
                        jornal
                    </p>
                </div>
                <div>
                    <h1 class="jornal-titulo">
                        Jornal Brasil
                    </h1>
                </div>
                <div class="secao end-secao">
                    <p>
                        Brasil
                    </p>
                </div>
            </div>
            <?= $this->include('layout/menu') ?>
            <div class="sub-header">
                <p>Jornal Brasil</p>
                <p>20/11/2026</p>
            </div>
        </header>
        <main class="container">
            <!-- Aqui é injetado o conteúdo de cada página -->
            <?= $this->renderSection('conteudo') ?>
        </main>
    </body>
</html>