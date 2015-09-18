<div class="container">
    <div class="section">
        <h1>Informations d'un article</h1>
    </div>
    <div class="row">
        <div class="col s12">
            <div class="card-panel grey lighten-5 z-depth-1">
                <div class="row valign-wrapper">
                    <div class="col s10">
                        <span class="black-text">
                            <h4><?= h($post->title) ?></h4>
                            <hr>
                            <div class="row">
                                <div class="col s12 m6 l8">                    
                                    <p><strong class="subheader"><?= __('Auteur') ?></strong> : <?= $this->Html->link(ucfirst($post->user->login), ['controller' => 'Users', 'action' => 'view', $post->user->id]) ?></p>
                                    <p><strong class="subheader"><?= __('Catégorie') ?></strong> : <?= $this->Html->link($post->post_category->name, ['controller' => 'PostCategories', 'action' => 'view', $post->post_category->id]) ?></p>
                                    <p><strong class="subheader"><?= __('Corps de l\'article') ?></strong> : <blockquote class="truncate"><?= $this->Text->autoParagraph(h($post->body)) ?></blockquote></p>
                                </div>
                                <div class="col s12 m6 l4">
                                    <p><strong class="subheader"><?= __('Créé le') ?></strong> : <?= h($post->created->i18nFormat('dd/MM/YYYY à HH:mm:ss')) ?></p>
                                    <p><strong class="subheader"><?= __('Modifié le') ?></strong> : <?= h($post->modified->i18nFormat('dd/MM/YYYY à HH:mm:ss')) ?></p>
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>