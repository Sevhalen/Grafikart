<ul>

<?php foreach($db->query('SELECT * FROM articles') as $post): ?>

	<h2><a href="<?php $post->url; ?>"><?= $post->titre; ?></a></h2>
	
	<p><?php $post->extrait; ?></p>

<?php endforeach; ?>

</ul>
