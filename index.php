<?php

require 'form.php';
require 'personnage.php';
require 'text.php';


$merlin = new Personnage('Merlin');
$merlin->regenerer();

var_dump($merlin);


$form = new Form(array(
    'username' => 'Roger'
));

var_dump(Text::withZero(10));

echo $form->input('username');
echo $form->input('password');
echo $form->submit();
