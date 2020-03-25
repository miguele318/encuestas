<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
$this->assign('title', 'Lista Usuarios');
?>



<?= $this->Html->script('bootstrap/bootstrap.bundle.min.js') ?>
<?= $this->Html->script('jquery/jquery.easing.min.js') ?>
<?= $this->Html->css('bootstrap/bootstrap.min.css') ?>
<?= $this->Html->script('bootstrap/bootstrap.min.js') ?>
<?= $this->Html->script('jquery/jquery.min.js') ?>
<?= $this->Html->css('style.css') ?>
<?= $this->Html->css('styles.min.css') ?>


<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> index User</title>
    
    
</head>
<body id="page-top" >

    

<div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
        <h3 class='otro_color'>LISTA DE USUARIOS</h3>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                  
                   <th><?= $this->Paginator->sort('Usuario') ?></th>
                    <th><?= $this->Paginator->sort('Nombre') ?></th>
                    <th><?= $this->Paginator->sort('Apellidos') ?></th>
                    
                    <th><?= $this->Paginator->sort('Tipo Usuario') ?></th>
                    <th><?= $this->Paginator->sort('Activo') ?></th>
                    <th class="title_color">Ver</th>
                    <th class="title_color">Editar</th>
                    <th class="title_color">Borrar</th>
                    
                   </thead>
    <tbody>

    <?php $numero = 1;
     foreach ($users as $user): ?>
        
                <tr>
                <?php if ($numero%2==0): ?>
                    <td class='otro_color'> <?= h($user->username) ?></td>
                    <td class='otro_color'> <?= h($user->first_name) ?></td>
                    <td class='otro_color'> <?= h($user->last_name) ?></td>
                    <td class='otro_color'> <?= h($user->role) ?></td>
                    <td class='otro_color'> <?= $user->active ? __('Si') : __('No'); ?></td>
            
            <?php else:?>
                <td ><?= h($user->username) ?></td>
                    <td ><?= h($user->first_name) ?></td>
                    <td ><?= h($user->last_name) ?></td>
                    <td ><?= h($user->role) ?></td>
                    <td> <?= $user->active ? __('Si') : __('No'); ?>
                    </td>
                
            <?php endif;?>
                
                    
                    
                    <td> 
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->username]) ?>
                        </td>
                        <td>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->username]) ?>
                        </td>
                        <td>
                        <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $user->username], ['confirm' => __('Are you sure you want to delete # {0}?', $user->username)]) ?>
                    </td>
                </tr>
                <?php $numero++;?>
                <?php endforeach; ?>
   
    
 
    

    
   
    
    </tbody>
        
</table>


<div class="clearfix"></div>

<ul class="pagination pull-right">

  <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
</ul>
<p class='otro_color'><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>       

            </div>
            
        </div>
	</div>
</div>
</body>
                </html>