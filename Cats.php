<?php


class Cats {
    private $thoughtBubble;

    public function __construct (array $message_lines) {
        $message = '';
        $max_lenght = 0;

        $intend = str_repeat(' ', 10);
        foreach ($message_lines as $line) {
            $line_length = strlen($line);
            $max_lenght = ($line_length > $max_lenght) ? $line_length : $max_lenght;
        }

        foreach ($message_lines as $line) {
            $message .= $intend . '| ' . $line . str_repeat(' ', $max_lenght - strlen($line)) . ' |' . PHP_EOL;
        }

        $line_of_stars = $intend . str_repeat('*', $max_lenght + 4);
        $this->thoughtBubble = $line_of_stars . PHP_EOL . $message . $line_of_stars;

        return $this;
    }


    public function cat() {
        return <<<DOC
$this->thoughtBubble
             /
  |\_._/|   /
  | 0 0 |  /
  (  T  ) /
 .^`-^-'^.
 `.  ;  .'
 | | | | |
((_((|))_))
DOC;
    }

    public function catRight() {
        return <<<DOC
$this->thoughtBubble
             /
  |,\__/|   /     
  |  o o|  /      
  (   T ) /       
 .^`--^'^.     
 `.  ;  .'     
 | | | | |     
((_((|))_))    
DOC;
    }

    public function catLeft() {
        return <<<DOC
$this->thoughtBubble
           \
            \  |\__/,|      
             \ |o o  |      
              \( T   )      
              .^`^--'^.     
              `.  ;  .'     
              | | | | |     
             ((_((|))_))    
DOC;
    }
}

