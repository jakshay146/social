<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Post> $posts
 */
?>
<div class="posts index content">
    <?= $this->Html->link(__('New Post'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Posts') ?></h3>
    <div class="table-responsive">
        <table>
            <!-- <thead>
                <tr>
    <th><?= $this->Paginator->sort('post_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th> 
                    
                    <th><?= $this->Paginator->sort('title') ?></th>
                    </tr>
                    <tr>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    </tr>
                    <th><?= $this->Paginator->sort('image') ?></th> 

                    <th class="actions"><?= __('Actions') ?></th> 
                </tr>
            </thead> -->
            <tbody>
                <?php foreach ($posts as $post): ?>
                <tr>
                    <!-- <td><?= $this->Number->format($post->post_id) ?></td>
                    <td><?= $post->has('user') ? $this->Html->link($post->user->user_id, ['controller' => 'Users', 'action' => 'view', $post->user->user_id]) : '' ?></td> -->
                    <td><?= h($post->title) ?></td>
                </tr>
                <tr>
                        <td><?= $this->Html->image($post->image)?></td>
                    
                </tr>
                <tr>
                <td><?= h($post->users->first_name)?></td>
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
