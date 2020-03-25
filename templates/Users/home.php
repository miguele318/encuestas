<?php 
$this->assign('title', 'Inicio');
?>

<?= $this->Html->script('jquery/jquery.min.js') ?>
<?= $this->Html->script('bootstrap/bootstrap.bundle.min.js') ?>
<?= $this->Html->script('jquery/jquery.easing.min.js') ?>
<?= $this->Html->css('bootstrap/bootstrap.min.css') ?>
<?= $this->Html->script('bootstrap/bootstrap.min.js') ?>
<?= $this->Html->css('style.css') ?>
<?= $this->Html->css('styles.min.css') ?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


        <h3 class='otro_color'> Bienvenido  <?= $this->Html->link($current_user['first_name'].' '.$current_user['last_name'], ['controller'=>'Users', 'action'=>'view',$current_user['username']]) ?> </h3>    













