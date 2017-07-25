<div class="row">

	<div class="col-sm-8">

	<ul>

	<!-- $post recupere un ensemble d'objets Articles, chaque objet correspondant à un seul article
		grace au FetchAll fait dans Database -->
	<?php foreach(\app\table\Article::getLast() as $post): ?>

		<h2><a href="<?= $post->url; ?>"><?= $post->titre; ?></a></h2>
	
		<p><em><?= $post->categorie; ?></em></p>
	
		<p><?= $post->extrait; ?></p>

	<?php endforeach; ?>

	</ul>

	</div>

	<div class="col-sm-4">
	
		<ul>
		<?php foreach(\app\table\Categorie::all() as $category): ?>
			<li><a href="<?= $category->url; ?>"><?= $category->titre; ?><</a></li>
		<?php endforeach; ?>
		</ul>
		
	</div>

</div>
