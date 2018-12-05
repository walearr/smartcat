<?php
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    echo str_repeat(PHP_EOL, 50);
} else {
    system('reset');
}


include('Cats.php');
$username = 'User';

echo (new Cats([
    'Hello my name is Smartcat.',
    'Do you want to play a math game?'

]))->catRight();
readline($username . ': ');


