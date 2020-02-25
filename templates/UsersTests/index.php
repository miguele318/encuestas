<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersTest[]|\Cake\Collection\CollectionInterface $usersTests
 */
?>
<div class="usersTests index content">
    <?= $this->Html->link(__('New Users Test'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users Tests') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('url_app') ?></th>
                    <th><?= $this->Paginator->sort('max_date') ?></th>
                    <th><?= $this->Paginator->sort('message') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('test_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usersTests as $usersTest): ?>
                <tr>
                    <td><?= $this->Number->format($usersTest->id) ?></td>
                    <td><?= h($usersTest->url_app) ?></td>
                    <td><?= h($usersTest->max_date) ?></td>
                    <td><?= h($usersTest->message) ?></td>
                    <td><?= h($usersTest->username) ?></td>
                    <td><?= $usersTest->has('test') ? $this->Html->link($usersTest->test->name, ['controller' => 'Tests', 'action' => 'view', $usersTest->test->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usersTest->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersTest->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersTest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersTest->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
