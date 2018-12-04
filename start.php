<?php
system('reset');

include('Cats.php');
$username = 'User';

echo (new Cats([
    'Hello my name is Smartcat.',
    'Do you want to play a math game?'

]))->catRight();
readline($username . ': ');
