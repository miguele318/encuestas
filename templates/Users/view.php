<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->username], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->username], ['confirm' => __('Are you sure you want to delete # {0}?', $user->username), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->username) ?></h3>
            <table>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($user->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($user->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($user->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= h($user->role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Create Date') ?></th>
                    <td><?= h($user->create_date->nice()) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified Date') ?></th>
                    <td><?= h($user->modified_date->nice()) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $user->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Tests') ?></h4>
                <?php if (!empty($user->tests)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->tests as $tests) : ?>
                        <tr>
                            <td><?= h($tests->id) ?></td>
                            <td><?= h($tests->name) ?></td>
                            <td><?= h($tests->description) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Tests', 'action' => 'view', $tests->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Tests', 'action' => 'edit', $tests->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tests', 'action' => 'delete', $tests->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tests->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
