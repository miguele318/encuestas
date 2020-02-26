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
				<h3>Add User </h3>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group otro_color">
						
						
                            <?php
                            echo $this->Form->control('username', ['class'=>'form-control', 'type'=>'text']);
                            echo $this->Form->control('first_name', ['class'=>'form-control']);
                            echo $this->Form->control('last_name', ['class'=>'form-control']);
                            echo $this->Form->control('password', ['class'=>'form-control']);
                            
                        ?>
                        <di id='rol'>
                                        <?=$this->Form->control('role', [['class'=>'form-control'], 'options'=>['admin'=>'admin', 'user'=>'user']])  ?>
                                </div>
						
					</div>
					
					<div class="form-group">
						
						<?= $this->Form->button('Submit', ['class'=>'btn float-right login_btn'])?>
					</div>
				</form>
			</div>
			<?= $this->Form->end() ?>
		</div>
	</div>
</div>
    
</body>
</html>

