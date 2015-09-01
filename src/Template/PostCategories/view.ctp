<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Post Category'), ['action' => 'edit', $postCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Post Category'), ['action' => 'delete', $postCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Post Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post Category'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="postCategories view large-10 medium-9 columns">
    <h2><?= h($postCategory->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($postCategory->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($postCategory->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($postCategory->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($postCategory->modified) ?></p>
        </div>
    </div>
</div>
