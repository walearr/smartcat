<?php
define ("MAX_RESPOND_TIME" ,10);

function randNumber () {
    return rand(1,10);
}

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
    $start_time = time();
    $number1 = randNumber();
    $number2 = randNumber();
    $result = ($number1 * $number2);
    $given_options = array(randNumber() * randNumber(), randNumber() * randNumber(), $result);
    shuffle($given_options);

    echo $cat->catsay([
        'what is multiplication of ' . $number1 . ' and ' . $number2,
        'answer options are: ' . $given_options[0] . ' ' .  $given_options[1] . ' ' . $given_answers[2]
    ])->cat();

    $answer = readline('My answer to 1st question is: ');

    if (MAX_RESPOND_TIME >= (time() - $start_time) AND $answer == $result) {
        echo "pareizi un laika";
    }
    else {
        echo "nepareiza atbilde/nepaspeji";
    }
}
else {
    $clearScreen();

    echo $cat->catsay(['No username given'])->cat();
}
