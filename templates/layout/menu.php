
<!DOCTYPE html>
<?= $this->Html->css('bootstrap/bootstrap.min') ?>
<?= $this->Html->css('styles.min') ?>
<?= $this->Html->css('font-awesome.min') ?>
<?= $this->Html->css('Cabin') ?>
<?= $this->Html->css('Lora') ?>
<?= $this->Html->script('bootstrap/bootstrap.min') ?>
<?= $this->Html->script('jquery/jquery.min') ?>
<?= $this->Html->script('script.min') ?>
<?= $this->Html->script('bootstrap/bootstrap.bundle.min') ?>
<?= $this->Html->script('jquery/jquery.easing.min') ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= h($this->fetch('title')) ?></title>
</head>
<body  >
    <nav class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#">surveys S&amp;S</a><button data-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><?= $this->Html->link(__('Add'), ['Controller'=>'Users' ,'action' => 'login'], ['class'=>"nav-link js-scroll-trigger"]) ?></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><?= $this->Html->link(__('logout'), ['Controller'=>'Users' ,'action' => 'login'], ['class'=>"nav-link js-scroll-trigger"]) ?></li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->fetch('content')?>
</body>
</html>