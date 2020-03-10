<?php
/**
 * @var \App\View\AppView $this
 * 
 */
$correosE =[];

?>

<?= $this->Html->css('bootstrap/bootstrap.min2.css') ?>
<?= $this->Html->css('bootstrap/bootstrap.min.css') ?>
<?= $this->Html->css('fonts/font-awesome.min.css') ?>
<?= $this->Html->css('fonts/ionicons.min.css') ?>
<?= $this->Html->script('bootstrap/bootstrap.min2.js') ?>
<?= $this->Html->script('jquery/jquery.min2.js') ?>
<?= $this->Html->script('jquery/jquery.min.js') ?>

<?= $this->Html->css('fonts/newFonts/font-awesome.min2.css') ?>
<?= $this->Html->css('fonts/newFonts/ionicons.min2.css') ?>
<?= $this->Html->css('styleCE.css') ?>

<?= $this->Html->css('Navigation-with-Search.css') ?>
<?= $this->Html->css('Footer-Basic.css') ?>

<?= $this->Html->script('jquery/jquery.min2.js') ?>     
<?= $this->Html->script('bootstrap/bootstrap.min2.js') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</head>
<body>
<?= $this->fetch('error')?>

    <?= $this->fetch('success')?>
    <script>

        $(document).ready(
            function()
            {  
               
        
                $("#correo").keypress(
                    function(e)
                    { 

                        
                        
                       // e.stopPropagation();
                        var code = e.key; // recommended to use e.key, it's normalized across devices and languages
                        if(code==="Enter")
                        {
                            e.preventDefault();
                            console.log("Entro a Enter");
                            regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                            if(!regex.test($("#correo").val())){
                                alert('email no es valido');
                            
                            }
                            else{
                                alert('email valido');
                                console.log("salió");
                                
                                var txt = '<li><input name="correos[]" class="field" style="border:0px" value="'+ $("#correo").val() +'"></li>';
                            
                                $("#lstCorreos").append(txt);
                        
                                document.getElementById('correo').value='';
                                e.setkey
                            }

                            

                            
                            
                        }
                    } // missing closing if brace
                ); 
/*
                $("#correo").on("keyup keydown", function(e)
                {
                    console.log("Entro a on");
                    if(e.key === "Enter")
                    {
                        e.preventDefault();
                        e.stopPropagation();
                        
                    }
                });*/

        
        });
    
    

    </script>

    <div class="container datos">
        <div class="text-center bg-light" id="info">
            <?= $this->Flash->render('auth') ?>
			<?= $this->Form->create($usersTest) ?>    
            <div id="datos">
                <label class="d-inline-flex"><strong>Nombre de la encuesta:  </strong></label>
                <?=$this->Form->input('name', ['class'=>"border rounded form-control-sm", 'type'=>"text", "placeholder" => "Encuesta... ", "label" => false, "required"])?>
                <p></p>
                <label class="d-inline-flex"><strong>Pagina WEB:  </strong></label>
                <?=$this->Form->input('url_app', ['id'=>'url', 'class'=>"border rounded form-control-sm", 'type' =>"text", "placeholder" => "Pagina WEB... ", "label" => false, "required"])?>
    
                <i class="fa fa-remove"></i>
                <p></p>
                <label class="d-inline-flex"><strong>Fecha fin:  </strong></label>
                <?=$this->Form->input('max_date', ['type'=>"date"])?>  
                <p></p>
                <label class="d-inline-flex"><strong>Tipo de test:  </strong></label>
                <?=$this->Form->control('test_id', ['options' => $tests])  ?>

                <p></p><label class="d-inline-flex"><strong>Mensaje para los encuestados:&nbsp;</strong></label>
                <?=$this->Form->input('message', ['type'=>'textarea', 'class'=>"border rounded form-control-lg", 'autocomplete'=>"on", 'autofocus'=>"", 'spellcheck'=>"true", 'cols'=>"30", 'style'=>"width: 70%;height: 80px;margin: 0 auto;"])?>
                


                <p></p><label class="d-inline-flex"><strong>E-mail:&nbsp;&nbsp;</strong></label>
                
                <input  id='correo' class="border rounded form-control-sm" type="text" style="margin: 5px;width: 50%;">
                <ol id="lstCorreos" class="border rounded form-control-sm" style="margin: 5px;width: 50%;">
                </ol>

                               

                <p></p> <?= $this->Form->button(('crear Encuesta'), ['class'=>"btn btn-primary",  'style'=>"margin: 0 auto;width: 200px;height: 50px;", 'onClick'=>'submit()' ]) ?></div>
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
    
    </body>
    </html>