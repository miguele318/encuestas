<?php
/**
 * @var \App\View\AppView $this
 * 
 */
?>

<?= $this->Html->css('bootstrap/bootstrap.min2.css') ?>
<?= $this->Html->css('fonts/newFonts/font-awesome.min2.css') ?>
<?= $this->Html->css('fonts/newFonts/ionicons.min2.css') ?>
<?= $this->Html->css('styleCE.css') ?>
<?= $this->Html->css('Navigation-with-Search.css') ?>
<?= $this->Html->css('Footer-Basic.css') ?>

<?= $this->Html->script('jquery/jquery.min2.js') ?>     
<?= $this->Html->script('bootstrap/bootstrap.min2.js') ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Crear Encuesta</title>

</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md sticky-top bg-primary navigation-clean-search">
        <div class="container"><a class="navbar-brand text-left text-white" href="#" style="filter: brightness(116%) contrast(101%);font-size: 30px;"><em>Encuestas</em></a><a class="btn btn-light text-right action-button" role="button" href="#">Cerrar Sesion</a></div>
    </nav>
    <div class="container datos">
        <div class="text-center bg-light" id="info">
            <?= $this->Flash->render('auth') ?>
			<?= $this->Form->create($usersTest) ?>    
            <div id="datos">
                <label class="d-inline-flex"><strong>Nombre de la encuesta:  </strong></label>
                <?=$this->Form->input('name', ['class'=>"border rounded form-control-sm", 'type'=>"text", "placeholder" => "Encuesta... ", "label" => false, "required"])?>
                <p></p>
                <label class="d-inline-flex"><strong>Pagina WEB:  </strong></label>
                <?=$this->Form->input('url_app', ['class'=>"border rounded form-control-sm", 'type' =>"text", "placeholder" => "Pagina WEB... ", "label" => false, "required"])?>
                <i class="fa fa-remove"></i>
                <p></p>
                <label class="d-inline-flex"><strong>Fecha fin:  </strong></label>
                <?=$this->Form->input('max_date', ['type'=>"date"])?>  
                <p></p>
                <label class="d-inline-flex"><strong>Tipo de test:  </strong></label>
                <?=$this->Form->control('test_id', ['options' => $tests])  ?>
                <p></p>
                <label class="d-inline-flex"><strong>Mensaje para los encuestados:  </strong></label>
                <?=$this->Form->textarea('message', ['type'=>'textarea', 'class'=>"border rounded form-control-lg", "placeholder" => "Mensaje para los encuestados... ", "label" => false, "required", 'autocomplete'=>"on", 'autofocus'=>"", 'spellcheck'=>"true", 'cols'=>"30"])?>
                <?= $this->Form->end() ?>

                <?= $this->Form->create($Evaluation)?> 
                <p></p><label class="d-inline-flex"><strong>E-mail:  </strong></label><input class="border rounded form-control-sm" type="text" style="margin: 5px;width: 50%;">
                <!--<button class="btn btn-primary" type="button">Agregar</button>-->
                <p></p><button class="btn btn-primary" type="button" style="margin: 0 auto;width: 200px;height: 50px;">Crear Encuesta</button>
            </div>
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