<div class="container">
    
    <div class="section">
        <h1>Gestion des articles</h1>
        <?= $this->Html->link(__('Créer un nouvel article'), ['controller' => 'Posts', 'action' => 'add'], ['class' => 'waves-effect waves-light btn']) ?>
    </div>

    <div class="row">
        <div class="col s12">
            <table cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('title') ?></th>
                        <th><?= $this->Paginator->sort('author_id') ?></th>
                        <th><?= $this->Paginator->sort('category_id') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($posts as $post): ?>
                    <tr>
                        <td><?= $this->Number->format($post->id) ?></td>
                        <td><?= h($post->title) ?></td>
                        <td>
                            <?= $post->has('user') ? $this->Html->link($post->user->login, ['controller' => 'Users', 'action' => 'view', $post->user->id]) : '' ?>
                        </td>
                        <td>
                            <?= $post->has('post_category') ? $this->Html->link($post->post_category->name, ['controller' => 'PostCategories', 'action' => 'view', $post->post_category->id]) : '' ?>
                        </td>
                        <td><?= h($post->created->i18nFormat('dd/MM/YYYY à HH:mm:ss')) ?></td>
                        <td><?= h($post->modified->i18nFormat('dd/MM/YYYY à HH:mm:ss')) ?></td>
                        <td class="actions">
                            <a href="<?= $this->Url->Build(['controller' => 'Posts', 'action' => 'view', $post->id]) ?>"><i class="material-icons">visibility</i></a>
                            <a href="<?= $this->Url->Build(['controller' => 'Posts', 'action' => 'edit', $post->id]) ?>"><i class="material-icons">create</i></a>
                            <a href="<?= $this->Url->Build(['controller' => 'Posts', 'action' => 'delete', $post->id]) ?>" onclick="return confirm('Confirmer la supression ?')"><i class="material-icons">clear</i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col s3 offset-s4">
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                </ul>
            </div>
        </div>
        <div class="col s12">
            <p class="right-align"><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
</div>
