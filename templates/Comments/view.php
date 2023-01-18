<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comment $comment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Comment'), ['action' => 'edit', $comment->comment_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Comment'), ['action' => 'delete', $comment->comment_id], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->comment_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Comments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Comment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="comments view content">
            <h3><?= h($comment->comment_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $comment->has('user') ? $this->Html->link($comment->user->user_id, ['controller' => 'Users', 'action' => 'view', $comment->user->user_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Post') ?></th>
                    <td><?= $comment->has('post') ? $this->Html->link($comment->post->post_id, ['controller' => 'Posts', 'action' => 'view', $comment->post->post_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Comment') ?></th>
                    <td><?= h($comment->comment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comment Id') ?></th>
                    <td><?= $this->Number->format($comment->comment_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
