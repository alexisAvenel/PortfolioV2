<div class="container">
    
    <div class="section">
        <h1>Créer un article</h1>
    </div>

    <?php
    print_r($users);
    // foreach($users as $v):
    //     echo $v['id'];
    //     echo $v['firstname'];
    // endforeach;
    ?>

    <div class="row">
        <?= $this->Form->create($post, ['class'=>"col s12", 'autocomplete' => 'off']) ?>
        <div class="row">
            <div class="input-field col s12">
                <?php echo $this->Form->input('title'); ?>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="body" class="materialize-textarea" name="body"></textarea>
                <label for="body">Corps de l'article</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <select name="author_id">
                    <option value="" disabled selected>Choix de l'utilisateur</option>
                    <?php foreach($users as $user): ?>
                    <option value="<?= $user['id']; ?>"><?= $user['firstname'].' '.$user['lastname']; ?></option>
                    <?php endforeach; ?>
                </select>
                <label>Utilisateurs</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <select name="category_id">
                    <option value="" disabled selected>Choix de la catégorie</option>
                    <?php foreach($postCategories as $postCategory): ?>
                    <option value="<?= $postCategory->id; ?>"><?= $postCategory->name; ?></option>
                    <?php endforeach; ?>
                </select>
                <label>Catégorie</label>
            </div>
        </div>
        <div class="row">
            <div class="col s4 offset-s4">
                <button class="waves-effect waves-light btn-large light-green" type="submit">Créer
                    <i class="material-icons right">send</i>
                </button>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>