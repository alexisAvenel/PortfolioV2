<div class="container">
    
    <div class="section">
        <h1>Modifier un utilisateur</h1>
    </div>

    <div class="row">
        <?= $this->Form->create($user, ['class'=>"col s12", 'autocomplete' => 'off', 'type' => 'file']) ?>
        <div class="row">
            <div class="input-field col s12">
                <?php echo $this->Form->input('firstname'); ?>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <?php echo $this->Form->input('lastname'); ?>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <?php echo $this->Form->input('login'); ?>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <?php echo $this->Form->input('password'); ?>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <select name="role">
                    <option value="" disabled>Choix du rôle</option>
                    <option value="admin" <?= ($user->role == 'admin') ? 'selected' : ''; ?>>Administrateur</option>
                    <option value="user" <?= ($user->role == 'user') ? 'selected' : ''; ?>>Utilisateur</option>
                </select>
                <label>Rôle</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <?php echo $this->Form->input('email'); ?>
            </div>
        </div>
        <div class="row">
            <?php if(!empty($user->avatar) && $user->avatar != 'null'): ?>
                <div class="col s12 m7">
                    <div class="card-panel grey lighten-5 z-depth-1">
                        <div class="row valign-wrapper">
                            <div class="col s2">
                                <img src="<?= BASE_URL.'img/'.$user->avatar; ?>" alt="<?= $user->firstname.' '.$user->lastname; ?>" class="circle responsive-img">
                            </div>
                            <div class="col s10">
                                <span class="black-text">
                                    <?= $user->firstname.' '.$user->lastname; ?>
                                    <hr>
                                    <button class="waves-effect waves-light btn-large orange" type="button" id="newAvatar">Modifier l'avatar</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="file-field input-field col s12 hide" id="blockNewAvatar">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" name="avatar">
                    </div>
                </div>
            <?php else: ?>
                <div class="file-field input-field col s12">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" name="avatar">
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col s4 offset-s4">
                <button class="waves-effect waves-light btn-large light-green" type="submit">Modifier
                    <i class="material-icons right">send</i>
                </button>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>