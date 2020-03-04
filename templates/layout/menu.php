
<?= $this->Html->css('fonts/ind/font-awesome.min.css', ['block' => true]) ?>
<?= $this->Html->script('inde/script.min.js', ['block' => true]) ?>
<?= $this->Html->script('bootstrap/bootstrap.bundle.min.js', ['block' => true]) ?>
<?= $this->Html->script('jquery/jquery.easing.min.js', ['block' => true]) ?>
<?= $this->Html->css('bootstrap/bootstrap.min.css', ['block' => true]) ?>
<?= $this->Html->script('bootstrap/bootstrap.min.js', ['block' => true]) ?>
<?= $this->Html->script('jquery/jquery.min.js', ['block' => true]) ?>
<?= $this->Html->css('style.css', ['block' => true]) ?>
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
    <?= $this->fetch('error')?>

    <?= $this->fetch('success')?>
    <?php if(isset($current_user)): ?>
    
    <?= $this->Html->link(__('Survey S&S'), ['controller'=>'Users', 'action' => 'home', 'class' => 'navbar-brand'])?>
    <?php else: ?>
        <?= $this->Html->link(__('Survey S&S'), ['controller'=>'Pages', 'action' => 'display', 'class'=> 'navbar-brand']) ?>
        <?php endif; ?>
        <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
            <i class="fa fa-bars">

            </i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <?php if(isset($current_user)): ?>

                    <?php if($current_user['role']=='admin'): ?>
                        <ul class="nav navbar-nav ml-auto text-uppercase navbar-right">
                            <li role="presentation" class="nav-item"> <?= $this->html->link('USER ADD ', ['controller'=>'Users', 'action'=>'add','class'=>'nav-link js-scroll-trigger'])?></li>
                            <li role="presentation" class="nav-item"> <?= $this->html->link('USERS LIST', ['controller'=>'Users', 'action'=>'index','class'=>'nav-link js-scroll-trigger'])?></li>
                            <li role="presentation" class="nav-item"><?= $this->html->link('ADD TEST  ', ['class'=>'nav-link js-scroll-trigger'])?></li>
                            <li role="presentation" class="nav-item"> <?= $this->html->link('TESTS LIST ', ['class'=>'nav-link js-scroll-trigger'])?></li>
                            <li role="presentation" class="nav-item"> <?= $this->html->link('LOGOUT', ['controller'=>'Users', 'action'=>'logout','class'=>'nav-link js-scroll-trigger'])?></li>
                            
                            
                        </ul>
                    <?php else: ?>
                        <ul class="nav navbar-nav ml-auto text-uppercase navbar-right">
                            <li role="presentation" class="nav-item"><?= $this->html->link('ADD TEST  ', ['class'=>'nav-link js-scroll-trigger'])?></li>
                            <li role="presentation" class="nav-item"> <?= $this->html->link('TESTS LIST ', ['class'=>'nav-link js-scroll-trigger'])?></li>
                            <li role="presentation" class="nav-item"> <?= $this->html->link('LOGOUT', ['controller'=>'Users', 'action'=>'logout','class'=>'nav-link js-scroll-trigger'])?></li>
                        </ul>
                    <?php endif; ?>

            <?php endif; ?>
        </div>
    </div>
</nav>
   <?= $this->fetch('content')?>
</body>

</html>
