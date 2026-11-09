<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/cssestilo.css')?>">
</head>
<body>
    <header>
        <?= $this->include('layout/menu')?>
    </header>
    <main class="container">
    <?=$this->renderSection('conteudo')?>
</main>    
</body>
</html>