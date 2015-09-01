<div class="container">
	<div class="page-header">
		<h1>Connexion Administrateur</h1>
	</div>

	<div class="users form">
	<?= $this->Flash->render('auth') ?>
	<?= $this->Form->create() ?>
	    <?= $this->Form->input('login') ?>
	    <?= $this->Form->input('password') ?>
		<button class="btn waves-effect waves-light" type="submit">Connexion
		    <i class="material-icons right">send</i>
		</button>
	<?= $this->Form->end() ?>
	</div>
</div>