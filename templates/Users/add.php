<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?= $this->Html->css('style.css') ?>


<!DOCTYPE html>
<html lang="en">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id="page-top">
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
        <?= $this->Form->create($user) ?>

			<div class="card-header">
				<h3>Crear nuevo Usuario </h3>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group otro_color">
						
						<div>
							<label ><strong> Nombre Usuario  </strong></label>
							<?php
							echo $this->Form->input('username', ['class'=>'form-control', 'type'=>'text']);
							?>
						</div>
						<div>
							<label ><strong> Nombre  </strong></label>
							 <?php
							echo $this->Form->input('first_name', ['class'=>'form-control']);
							 ?>
						</div>
						
						<div>
							<label ><strong> Apellido  </strong></label>
							<?php
							echo $this->Form->input('last_name', ['class'=>'form-control']);
							?>
						</div>
						<div>
							<label ><strong> Contraseña  </strong></label>
							<?php
                            echo $this->Form->input('password', ['class'=>'form-control' , 'type'=>'password']);
								?>
						</div>
						
						<label ><strong>Tipo de Usuario  </strong></label>
						<div id='papel'>
                                    <?=$this->Form->control('role', [['class'=>'papel'], 'options'=>['admin'=>'Administrador', 'user'=>'Usuario']])  ?>
									</div>
						
					</div>
					
					<div class="form-group">
						
						<?= $this->Form->button('Guardar', ['class'=>'btn float-right login_btn'])?>
					</div>
				</form>
			</div>
			<?= $this->Form->end() ?>
		</div>
	</div>
</div>
    
</body>
</html>

