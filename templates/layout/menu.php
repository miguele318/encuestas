



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> <?= h($this->fetch('title'))?></title>
    
    <?= $this->Html->meta('icon') ?>

<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<?= $this->Html->css('bootstrap/bootstrap.min.css') ?>
<?= $this->Html->script('jquery/jquery.js') ?>
<?= $this->Html->script('bootstrap/bootstrap.min.js') ?>
<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>

</head>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
    <div class="container">
    <?= $this->fetch('error')?>

    <?= $this->fetch('success')?>
    <?php if(isset($current_user)): ?>
    
    <?= $this->Html->link(__('Encuestas S&S'), ['controller'=>'Users', 'action' => 'home', 'class' => 'navbar-brand'])?>
    <?php else: ?>
        <?= $this->Html->link(__('Encuestas S&S'), ['controller'=>'Pages', 'action' => 'display', 'class'=> 'navbar-brand']) ?>
        <?php endif; ?>
        <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
            <i class="fa fa-bars">
            </i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <?php if(isset($current_user)): ?>

                    <?php if($current_user['role']=='admin'): ?>
                        <ul class="nav navbar-nav ml-auto text-uppercase navbar-right">
                            <li role="presentation" class="nav-item nav-link js-scroll-trigger"> <?= $this->html->link('Crear Usuario ', ['controller'=>'Users', 'action'=>'add','class'=>'nav-link active js-scroll-trigger'])?></li>
                            <li role="presentation" class="nav-item nav-link js-scroll-trigger"> <?= $this->html->link('Lista de Usuarios', ['controller'=>'Users', 'action'=>'index','class'=>'nav-link active js-scroll-trigger'])?></li>
                            <li role="presentation" class="nav-item nav-link js-scroll-trigger"> <?= $this->html->link('Crear Encuesta  ', ['controller'=>'UsersTests', 'action'=>'crearEncuesta','class'=>'nav-link active js-scroll-trigger'])?></li>
                            <li role="presentation" class="nav-item nav-link js-scroll-trigger"> <?= $this->html->link('Lista de Encuestas', ['controller'=>'UsersTests', 'action'=>'index', 'class'=>'nav-link active js-scroll-trigger'])?></li>
                            <li role="presentation" class="nav-item nav-link js-scroll-trigger"> <?= $this->html->link('Cerrar sesion', ['controller'=>'Users', 'action'=>'logout','class'=>'nav-link active js-scroll-trigger'])?></li>
                            
                            
                        </ul>
                    <?php else: ?>
                        <ul class="nav navbar-nav ml-auto text-uppercase navbar-right">
                        <li role="presentation" class="nav-item nav-link js-scroll-trigger"> <?= $this->html->link('Crear Encuestas  ', ['controller'=>'UsersTests', 'action'=>'crearEncuesta','class'=>'nav-link active js-scroll-trigger'])?></li>
                            <li role="presentation" class="nav-item nav-link js-scroll-trigger"> <?= $this->html->link('Listas de encuestas ', ['controller'=>'UsersTests', 'action'=>'index','class'=>'nav-link active js-scroll-trigger'])?></li>
                            <li role="presentation" class="nav-item nav-link js-scroll-trigger"> <?= $this->html->link('Cerrar sesion', ['controller'=>'Users', 'action'=>'logout','class'=>'nav-link active js-scroll-trigger'])?></li>
                        </ul>
                    <?php endif; ?>

            <?php endif; ?>
        </div>
    </div>
</nav>
    <?= $this->Flash->render() ?>
   <?= $this->fetch('content')?>
</body>

</html>
