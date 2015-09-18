<div class="container">

    <div class="section">
        <h1>Modifier un article</h1>
    </div>

    <div class="row">
        <?= $this->Form->create($post, ['class'=>"col s12", 'autocomplete' => 'off']) ?>
        <div class="row">
            <div class="input-field col s12">
                <?php echo $this->Form->input('title'); ?>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="body" class="materialize-textarea" name="body"><?php echo $post->body; ?></textarea>
                <label for="body">Corps de l'article</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <select name="author_id">
                    <option value="" disabled selected>Choix de l'utilisateur</option>
                    <?php foreach($users as $k => $user): ?>
                        <?php $user_values = explode(';', $user); ?>
                        <option value="<?= $user_values[0]; ?>" <?php if($user_values[0] == $post->author_id) echo 'selected'; ?>><?= $user_values[1].' '.$user_values[2]; ?></option>
                    <?php endforeach; ?>
                </select>
                <label>Utilisateurs</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <select name="category_id">
                    <option value="" disabled selected>Choix de la catégorie</option>
                    <?php foreach($postCategories as $k => $postCategory): ?>
                        <option value="<?= $k; ?>" <?php if($k == $post->category_id) echo 'selected'; ?>><?= $postCategory; ?></option>
                    <?php endforeach; ?>
                </select>
                <label>Catégorie</label>
            </div>
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