<?php

$post = $db->prepare('SELECT * FROM articles WHERE id = ?', [$_GET['id']], 'app\table\Article', true);

?>

<h1><?= $post->titre; ?></h1>


<h2><?= $post->contenu; ?></h2>
