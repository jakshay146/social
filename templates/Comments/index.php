<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Comment> $comments
 */
?>
<div class="comments index content">
    <?= $this->Html->link(__('New Comment'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Comments') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('comment_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('post_id') ?></th>
                    <th><?= $this->Paginator->sort('comment') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($comments as $comment): ?>
                <tr>
                    <td><?= $this->Number->format($comment->comment_id) ?></td>
                    <td><?= $comment->has('user') ? $this->Html->link($comment->user->user_id, ['controller' => 'Users', 'action' => 'view', $comment->user->user_id]) : '' ?></td>
                    <td><?= $comment->has('post') ? $this->Html->link($comment->post->post_id, ['controller' => 'Posts', 'action' => 'view', $comment->post->post_id]) : '' ?></td>
                    <td><?= h($comment->comment) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $comment->comment_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comment->comment_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comment->comment_id], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->comment_id)]) ?>
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
