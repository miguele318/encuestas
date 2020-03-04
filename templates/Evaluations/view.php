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
            <?= $this->Html->link(__('Edit Evaluation'), ['action' => 'edit', $evaluation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Evaluation'), ['action' => 'delete', $evaluation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evaluation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Evaluations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Evaluation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="evaluations view content">
            <h3><?= h($evaluation->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($evaluation->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Token') ?></th>
                    <td><?= h($evaluation->token) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($evaluation->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= h($evaluation->location) ?></td>
                </tr>
                <tr>
                    <th><?= __('Users Test') ?></th>
                    <td><?= $evaluation->has('users_test') ? $this->Html->link($evaluation->users_test->name, ['controller' => 'UsersTests', 'action' => 'view', $evaluation->users_test->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($evaluation->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= $this->Number->format($evaluation->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age') ?></th>
                    <td><?= $this->Number->format($evaluation->age) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($evaluation->date) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Answers') ?></h4>
                <?php if (!empty($evaluation->answers)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Value') ?></th>
                            <th><?= __('Question Id') ?></th>
                            <th><?= __('Evaluation Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($evaluation->answers as $answers) : ?>
                        <tr>
                            <td><?= h($answers->id) ?></td>
                            <td><?= h($answers->value) ?></td>
                            <td><?= h($answers->question_id) ?></td>
                            <td><?= h($answers->evaluation_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Answers', 'action' => 'view', $answers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Answers', 'action' => 'edit', $answers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Answers', 'action' => 'delete', $answers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $answers->id)]) ?>
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
