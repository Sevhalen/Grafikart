<?php

use \Tutoriel\HTML\BootstrapForm;
use \Tutoriel\Autoloader;

?>
<!DOCTYPE html>

<html lang="en">
	
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">
	
	<title>Starter Template for Bootstrap</title>
	
	<!-- Bootstrap core CSS -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<?php

require 'class/Autoloader.php';

Autoloader::register();


$form = new BootstrapForm($_POST);
?>

<form action="#" method="post">
	<?php
	echo $form->input('username');
	echo $form->input('password');
	echo $form->submit();
	?>
</form>

</body>

</html>
