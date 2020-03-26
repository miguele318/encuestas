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
            <?= $this->Html->link(__('Edit Users Test'), ['action' => 'edit', $usersTest->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Users Test'), ['action' => 'delete', $usersTest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersTest->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users Tests'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Users Test'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usersTests view content">
            <h3><?= h($usersTest->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Url App') ?></th>
                    <td><?= h($usersTest->url_app) ?></td>
                </tr>
                <tr>
                    <th><?= __('Message') ?></th>
                    <td><?= h($usersTest->message) ?></td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($usersTest->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Test') ?></th>
                    <td><?= $usersTest->has('test') ? $this->Html->link($usersTest->test->name, ['controller' => 'Tests', 'action' => 'view', $usersTest->test->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($usersTest->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Max Date') ?></th>
                    <td><?= h($usersTest->max_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
