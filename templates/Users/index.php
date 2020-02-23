<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */

?>

<?= $this->Html->script('style_tab') ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<body>
    

<div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
        <h4>LISTA DE USUARIOS</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                  
                   <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    
                    <th><?= $this->Paginator->sort('role') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                   </thead>
    <tbody>
    <?php foreach ($users as $user): ?>
                <tr>
                
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->first_name) ?></td>
                    <td><?= h($user->last_name) ?></td>
                    <td><?= h($user->role) ?></td>
                    <td><?php if(($user->active)>0)
                    {
                        Echo('Yes');

                    } 
                    else
                    {
                        Echo('No');
                        
                    }
                    ?></td>
                    
                    <td> 
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->username]) ?>
                        </td>
                        <td>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->username]) ?>
                        </td>
                        <td>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->username], ['confirm' => __('Are you sure you want to delete # {0}?', $user->username)]) ?>
                    </td>
                </tr>
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
<p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>       

            </div>
            
        </div>
	</div>
</div>
</body>