<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersTest $usersTest
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users Tests'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usersTests form content">
            <?= $this->Form->create($usersTest) ?>
            <fieldset>
                <legend><?= __('Add Users Test') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('url_app');
                    echo $this->Form->control('max_date');
                    echo $this->Form->control('message');
                    echo $this->Form->control('username');
                    echo $this->Form->control('test_id', ['options' => $tests]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
