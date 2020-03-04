<?php
/**
 * @var \App\View\AppView $this
 * 
 */
?>

<?= $this->Html->css('bootstrap.min2.css') ?>
<?= $this->Html->css('font-awesome.min.css') ?>
<?= $this->Html->css('ionicons.min.css') ?>
<?= $this->Html->script('bootstrap.min2.js') ?>
<?= $this->Html->script('jquery.min2.js') ?>
<?= $this->Html->css('styles.css') ?>
<?= $this->Html->css('Navigation-with-Search.css') ?>
<?= $this->Html->css('Footer-Basic.css') ?>
<?= $this->Html->css('Bootstrap-Calendar.css') ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>cacharreando1</title>

</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md sticky-top bg-primary navigation-clean-search">
        <div class="container"><a class="navbar-brand text-left text-white" href="#" style="filter: brightness(116%) contrast(101%);font-size: 30px;"><em>Encuestas</em></a><a class="btn btn-light text-right action-button" role="button" href="#">Cerrar Sesion</a></div>
    </nav>
    <div class="container datos">
        <div class="text-center bg-light" id="info">
            <?= $this->Flash->render('auth') ?>
			<?= $this->Form->create($usersTest) ?>    
            <div id="datos"><label class="d-inline-flex"><strong>Nombre de la encuesta:&nbsp;</strong></label>
            <?=$this->Form->input('name', ['class'=>"border rounded form-control-sm", 'type'=>"text", 'style'=>"margin: 5px;width: 45%;"])?>
                <p></p><label class="d-inline-flex"><strong>Pagina WEB:&nbsp;&nbsp;</strong></label>
                <?=$this->Form->input('url_app', ['class'=>"border rounded form-control-sm", 'type' =>"text", 'style'=>"margin: 5px;width: 64%;"])?><i class="fa fa-remove"></i>
                <p></p><label class="d-inline-flex"><strong>Fecha fin:&nbsp;&nbsp;</strong></label>
                <?=$this->Form->input('max_date', ['type'=>"date"])?>  
                <p></p><label class="d-inline-flex"><strong>Tipo de test:&nbsp;&nbsp;</strong></label>
                <?=$this->Form->control('test_id', ['options' => $tests])  ?>
                <p></p><label class="d-inline-flex"><strong>Mensaje para los encuestados:&nbsp;</strong></label>
                <?=$this->Form->input('message', ['type'=>'textarea', 'class'=>"border rounded form-control-lg", 'autocomplete'=>"on", 'autofocus'=>"", 'spellcheck'=>"true", 'cols'=>"30", 'style'=>"width: 70%;height: 80px;margin: 0 auto;"])?>
                <?= $this->Form->end() ?>

                <?=$this->Form->create($Evaluation)?> 
                <p></p><label class="d-inline-flex"><strong>E-mail:&nbsp;&nbsp;</strong></label><input class="border rounded form-control-sm" type="text" style="margin: 5px;width: 50%;"><button class="btn btn-primary" type="button">Agregar</button>
                <p></p><button class="btn btn-primary" type="button" style="margin: 0 auto;width: 200px;height: 50px;">Crear Encuesta</button></div>
        </div>
        <div></div>
    </div>
    <div class="border rounded-0 footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Encuestas © 2017</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>