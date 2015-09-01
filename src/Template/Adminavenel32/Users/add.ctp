<div class="container">
    
    <div class="section">
        <h1>Ajouter un utilisateur</h1>
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
                    <option value="" disabled selected>Choix du rôle</option>
                    <option value="admin">Administrateur</option>
                    <option value="user">Utilisateur</option>
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
            <div class="file-field input-field col s12">
                <div class="btn">
                    <span>File</span>
                    <input type="file" name="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" name="avatar">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s4 offset-s4">
                <button class="waves-effect waves-light btn-large light-green" type="submit">Ajouter
                    <i class="material-icons right">send</i>
                </button>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>