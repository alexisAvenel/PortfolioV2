<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $postCategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $postCategory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Post Categories'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="postCategories form large-10 medium-9 columns">
    <?= $this->Form->create($postCategory) ?>
    <fieldset>
        <legend><?= __('Edit Post Category') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
