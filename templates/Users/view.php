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

    <title>View</title>
</head>
<body id="page-top">
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">

			<div class="card-header">
            <h3 class="otro_color"> <?= h($user->first_name.'  '.$user->last_name) ?> </h3>
			</div>
			<div class="card-body">
				
					<div class="input-group form-group">
                    <table>
                <tr class="otro_color">
                    <th > <?= __('Nombre Usuario :') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr class="otro_color">
                    <th > <?= __('Nombre :') ?></th>
                    <td><?= h($user->first_name) ?></td>
                </tr>
                <tr class="otro_color" >
                    <th > <?= __('Apellidos :') ?></th>
                    <td><?= h($user->last_name) ?></td>
                </tr>
                <tr class="otro_color">
                    <th> <?= __('Tipo Usuario :') ?></th>
                    <td><?= h($user->role) ?></td>
                </tr>
                <tr class="otro_color">
                    <th > <?= __('Fecha Creacion :') ?></th>
                    <td><?= h($user->create_date->nice()) ?></td>
                </tr>
                <tr class="otro_color">
                    <th > <?= __('Fecha Modificacion :') ?></th>
                    <td><?= h($user->modified_date->nice()) ?></td>
                </tr>
                <tr class="otro_color">
                    <th > <?= __('Activo :') ?></th>
                    <td><?= $user->active ? __('Si') : __('No'); ?></td>
                </tr>
            </table>
						
					</div>
					
					<div class="form-group">
						
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->username], ['class'=>'btn float-right login_btn'])?>
					</div>
				
			</div>
			
		</div>
	</div>
</div>
</body>
</html>
            
            
            
