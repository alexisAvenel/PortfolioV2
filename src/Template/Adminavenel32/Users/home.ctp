<div class="container">
    <div class="section">
		<h1>Dashboard Administration</h1>
	</div>
</div>
<div class="row admin_dash">
	<div class="col l6 m12 s12">
		<div class="card-panel white z-depth-1">
			<div class="row">
				<div class="valign-wrapper">
					<div class="col s2">
						<i class="material-icons icon">assignment_ind</i>
					</div>
					<div class="col s9">
						<h4>Dernières inscriptions</h4>
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

	<div class="col l6 m12 s12">
		<div class="card-panel white z-depth-1">
			<div class="row">
				<div class="valign-wrapper">
					<div class="col s2">
						<i class="material-icons icon">assignment</i>
					</div>
					<div class="col s9">
						<h4>Derniers articles</h4>
					</div>
				</div>
				<div class="col s12">
					<div class="collection">
						<?php foreach($last_posts as $post): ?>
							<a href="<?php echo $this->Url->build(['controller' => 'posts', 'action' => 'view', $post->id]); ?>" class="collection-item">
								<?php echo "<span class='truncate inline'>".ucfirst($post->title)."</span> (".ucfirst($post->post_category->name).") posté par ".ucfirst($post->user->login)." | le ".$post->created->i18nFormat('dd-MM-YYYY à HH:mm:ss'); ?>
							</a>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
