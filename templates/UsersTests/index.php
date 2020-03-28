<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersTest[]|\Cake\Collection\CollectionInterface $usersTests
 */

$this->assign('title', 'Lista Encuestas');
?>



<?= $this->Html->script('bootstrap/bootstrap.bundle.min.js') ?>
<?= $this->Html->script('jquery/jquery.easing.min.js') ?>
<?= $this->Html->css('bootstrap/bootstrap.min.css') ?>
<?= $this->Html->script('bootstrap/bootstrap.min.js') ?>
<?= $this->Html->script('jquery/jquery.min.js') ?>
<?= $this->Html->css('style.css') ?>
<?= $this->Html->css('styles.min.css') ?>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


   
    


    

<div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
        <h3 class='otro_color'>LISTA DE ENCUESTAS</h3>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                    <th> <?= $this->Paginator->sort('name') ?></th>
                    <th> <?= $this->Paginator->sort('url_app') ?></th>
                    <th> <?= $this->Paginator->sort('max_date') ?></th>
                    <th class="title_color">Ver</th>
                    <th class="title_color">Editar</th>
                    <th class="title_color">Borrar</th>
                    
                   </thead>
    <tbody>

    <?php $numero = 1;
                     foreach ($usersTests as $usersTest): ?>
        
                <tr>
                <?php if ($numero%2==0): ?>
                    <td class='otro_color'> <?= h($usersTest->name) ?></td>
                    <td class='otro_color'> <?= h($usersTest->url_app) ?></td>
                    <td class='otro_color'> <?= h($usersTest->max_date) ?></td>
                   
            
            <?php else:?>
                <td ><?= h($usersTest->name) ?></td>
                    <td ><?= h($usersTest->url_app) ?></td>
                    <td ><?= h($usersTest->max_date) ?></td>
                   
                    
                    
                
            <?php endif;?>
            
                        
                       
                    
                    
                    <td> 
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usersTest->id]) ?>
                        </td>
                        <td>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersTest->id]) ?>
                        </td>
                        <td>
                         <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersTest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersTest->id)]) ?>
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
<p class='otro_color'><?= $this->Paginator->counter(__('pagina {{page}} of {{pages}}, muestra {{current}} registro(s) de un total de {{count}} registros')) ?></p>       

            </div>
            
        </div>
	</div>
</div>










                
                   
                    
                 
                  
                  
                    
                    

