<?php

if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    $clearScreen = function() {echo str_repeat(PHP_EOL, 50);};
}
else {
    $clearScreen = function() {system('reset');};
}

$clearScreen();

include('Cats.php');

$cat = new Cats();
echo $cat->catsay([
    'Hello, my name is Smartcat.',
    'Lets play a game.',
    'What is your name?'
])->catRight();

$username = readline('My name is: ');

if (strlen($username) > 0) {
    $clearScreen();

    $number1 = rand(1,20);
    $number2 = rand(1,20);
    $result = ($number1 * $number2);
    $given_answers = array(rand(1,20)*rand(1,20), rand(1,20)*rand(1,20), $result);
    shuffle($given_answers);

    echo $cat->catsay([
        'what is multiplication of ' . $number1 . ' and ' . $number2,
        'answer options are: ' . $given_answers[0] . ' ' .  $given_answers[1] . ' ' . $given_answers[2]
    ])->cat();

    $answer = readline('My answer to 1st question is: ');

    echo ($answer == $result) ? "correct" : "incorrect";
}
else {
    $clearScreen();

    echo $cat->catsay(['No username given'])->cat();
}
