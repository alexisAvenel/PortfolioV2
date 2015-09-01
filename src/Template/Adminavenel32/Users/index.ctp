<div class="container">
    
    <div class="section">
        <h1>Gestion des utilisateurs</h1>
        <?= $this->Html->link(__('Créer un nouvel utilisateur'), ['action' => 'add'], ['class' => 'waves-effect waves-light btn']) ?>
    </div>

    <div class="row">
        <div class="col s12">
            <table cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('firstname') ?></th>
                        <th><?= $this->Paginator->sort('lastname') ?></th>
                        <th><?= $this->Paginator->sort('login') ?></th>
                        <th><?= $this->Paginator->sort('email') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= h($user->firstname) ?></td>
                        <td><?= h($user->lastname) ?></td>
                        <td><?= h($user->login) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td class="actions">
                            <a href="<?= $this->Url->Build(['action' => 'view', $user->id]) ?>"><i class="material-icons">visibility</i></a>
                            <a href="<?= $this->Url->Build(['action' => 'edit', $user->id]) ?>"><i class="material-icons">create</i></a>
                            <a href="<?= $this->Url->Build(['action' => 'delete', $user->id]) ?>" onclick="return confirm('Confirmer la supression ?')"><i class="material-icons">clear</i></a>
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