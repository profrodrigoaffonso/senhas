<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->script('jquery.min.js') ?>
</head>
<body>
    <div class="container-fluid">
    <?= $this->fetch('content') ?>
    </div>
</body>
</html>
