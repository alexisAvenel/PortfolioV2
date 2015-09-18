<div class="container">
    <div class="section">
        <h1>Informations d'un utilisateur</h1>
        <ul>
            <li>
                <a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'edit', $this->request->session()->read('Auth.User.id')]); ?>">
                    <i class="material-icons">chevron_right</i> Modifier mon profil
                </a>
            </li>
            <?php if($this->request->session()->read('Auth.User.role') == 'admin'): ?>
            <li>
                <a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'index']); ?>">
                    <i class="material-icons">chevron_right</i> Liste des utilisateurs
                </a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
    <div class="row">
        <div class="col s12">
            <div class="card-panel grey lighten-5 z-depth-1">
                <div class="row valign-wrapper">
                    <div class="col s2">
                        <?php if(!empty($user->avatar) && $user->avatar != 'null'): ?>
                        <img src="<?= BASE_URL.'img/'.$user->avatar; ?>" alt="<?= $user->firstname.' '.$user->lastname; ?>" class="circle responsive-img">
                        <?php endif; ?>
                    </div>
                    <div class="col s10">
                        <span class="black-text">
                            <h4>ID utilisateur : <?= h($user->id) ?></h4>
                            <hr>
                            <div class="row">
                                <div class="col s12 m6 l8">                    
                                    <p><strong class="subheader"><?= __('Prénom') ?></strong> : <?= h($user->firstname) ?></p>
                                    <p><strong class="subheader"><?= __('Nom') ?></strong> : <?= h($user->lastname) ?></p>
                                    <p><strong class="subheader"><?= __('Login') ?></strong> : <?= h($user->login) ?></p>
                                    <p><strong class="subheader"><?= __('Password') ?></strong> : *******************</p>
                                    <p><strong class="subheader"><?= __('Email') ?></strong> : <?= h($user->email) ?></p>
                                    <p><strong class="subheader"><?= __('Role') ?></strong> : <?= h($user->role) ?></p>
                                </div>
                                <div class="col s12 m6 l4">
                                    <p><strong class="subheader"><?= __('Créé le') ?></strong> : <?= h($user->created->i18nFormat('dd/MM/YYYY à HH:mm:ss')) ?></p>
                                    <p><strong class="subheader"><?= __('Modifié le') ?></strong> : <?= h($user->modified->i18nFormat('dd/MM/YYYY à HH:mm:ss')) ?></p>
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>