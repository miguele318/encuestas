
<?= $this->Html->css('fonts/ind/font-awesome.min.css', ['block' => true]) ?>
<?= $this->Html->script('inde/script.min.js', ['block' => true]) ?>
<?= $this->Html->script('bootstrap/bootstrap.bundle.min.js', ['block' => true]) ?>
<?= $this->Html->script('jquery/jquery.easing.min.js', ['block' => true]) ?>
<?= $this->Html->css('bootstrap/bootstrap.min.css', ['block' => true]) ?>
<?= $this->Html->script('bootstrap/bootstrap.min.js', ['block' => true]) ?>
<?= $this->Html->script('jquery/jquery.min.js', ['block' => true]) ?>
<?= $this->Html->css('style.css', ['block' => true]) ?>
<?= $this->Html->script('style_tab', ['block' => true]) ?>
<?= $this->Html->script('agency.js', ['block' => true]) ?>
<?= $this->Html->css('styles.min.css', ['block' => true]) ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> <?= h($this->fetch('title'))?></title>
    <?= $this->fetch('script') ?>
    <?= $this->fetch('css') ?>
</head>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top">Survey S&S</a>
        <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
            <i class="fa fa-bars">

            </i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto text-uppercase navbar-right">
                <li role="presentation" class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">AÑADIR USUARIO</a></li>
                <li role="presentation" class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">LISTA DE USUARIOS</a></li>
                <li role="presentation" class="nav-item"><?= $this->html->link('CERRAR SESION',['controller'=>'Users', 'action'=>'logout','class'=>'nav-link js-scroll-trigger'])?></li>
                
            </ul>
        </div>
    </div>
</nav>
   <?= $this->fetch('content')?>
</body>

</html>
