<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
$this->assign('title', 'Editar Usuario');
?>
<?= $this->Html->script('jquery/jquery.min.js') ?>
<?= $this->Html->script('bootstrap/bootstrap.bundle.min.js') ?>
<?= $this->Html->script('jquery/jquery.easing.min.js') ?>
<?= $this->Html->css('bootstrap/bootstrap.min.css') ?>
<?= $this->Html->script('bootstrap/bootstrap.min.js') ?>

<?= $this->Html->css('style.css') ?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

   
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
        
            <?= $this->Form->create($user) ?>

                <div class="card-header">
                    <h3> Editar Usuario  <?= $user->first_name.'  '.$user->last_name  ?> </h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="input-group form-group otro_color">
                        <?php if($current_user['username']==$user->username): ?>
                            
                                    <div>
                                    <label ><strong> Nombre Usuario  </strong></label>
                                    <?php
                                    echo $this->Form->input('username', ['class'=>'form-control', 'type'=>'text']);
                                    ?>
                                </div>
                                <div>
                                    <label ><strong> Nombre  </strong></label>
                                    <?php
                                    echo $this->Form->input('first_name', [ 'class' => 'form-control' ]);
                                    ?>
                                </div>
                                <div>
                                    <label ><strong> Apellido  </strong></label>
                                    <?php
                                    echo $this->Form->input('last_name', ['class'=>'form-control' ]);
                                    ?>
                                </div>
                                <div>
                                    <label ><strong> Contraseña  </strong></label>
                                    <?php
                                    echo $this->Form->input('password', ['class'=>'form-control', 'type'=>'password', 'value'=>'' ]);
                                        ?>
                                </div>
						
                            <?php else: ?>
                                <?php if($current_user['role']=='admin'): ?>
                                    <label ><strong>Tipo de Usuario  </strong></label>
						            <div id='papel'>
                                        <?=$this->Form->control('role', ['label'=>false, 'options'=>['admin'=>'Administrador', 'user'=>'Usuario'] ])  ?>
									</div>
                                    
						            <div id='act'>
                                        <?= $this->Form->control('active', ['label'=>'Activo' , 'class'=>'form-control' ])?>
						            </div>
                                
                                     
                                    

                                <?php endif; ?>

                            <?php endif; ?>

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
    

