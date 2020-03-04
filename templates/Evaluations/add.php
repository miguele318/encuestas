<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evaluation $evaluation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Evaluations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="evaluations form content">
            <?= $this->Form->create($evaluation) ?>
            <fieldset>
                <legend><?= __('Add Evaluation') ?></legend>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('token');
                    echo $this->Form->control('state');
                    echo $this->Form->control('age');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('location');
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('user_test_id', ['options' => $usersTests]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
