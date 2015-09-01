<div class="container">
    <div class="section">
		<h1>Administration</h1>
	</div>

	<div class="row">
		<div class="col s6">
			<div class="card-panel grey lighten-5 z-depth-1">
				<div class="row">
					<div class="valign-wrapper">
						<div class="col s2">
							<i class="large material-icons red-text darken-1">assignment_ind</i>
						</div>
						<div class="col s9 offset-s1">
							<h4 class="black-text">Dernières inscriptions</h4>
						</div>
					</div>
					<div class="col s12">
						<div class="collection">
							<?php foreach($last_users as $user): ?>
								<a href="<?php echo $this->Url->build(['controller' => 'users', 'action' => 'view', $user->id]); ?>" class="collection-item">
									<?php echo ucfirst($user->firstname)." ".ucfirst($user->lastname)." | le ".$user->created->i18nFormat('dd-MM-YYYY à HH:mm:ss'); ?>
								</a>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col s6">
			<div class="card-panel grey lighten-5 z-depth-1">
				<div class="row">
					<div class="valign-wrapper">
						<div class="col s2">
							<i class="large material-icons red-text darken-1">assignment</i>
						</div>
						<div class="col s9 offset-s1">
							<h4 class="black-text">Derniers articles</h4>
						</div>
					</div>
					<div class="col s12">
						<div class="collection">
							<?php foreach($last_posts as $post): ?>
								<a href="<?php echo $this->Url->build(['controller' => 'posts', 'action' => 'view', $post->id]); ?>" class="collection-item">
									<?php echo ucfirst($post->title)." (".ucfirst($post->post_category->name).") posté par ".ucfirst($post->user->login)." | le ".$post->created->i18nFormat('dd-MM-YYYY à HH:mm:ss'); ?>
								</a>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>