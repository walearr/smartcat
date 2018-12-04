<?php

class Cats {
    public function __construct () {
        return $this;
    }

    public function cat($message) {
        return <<<DOC
         < $message >
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

    public function catRight($message) {
        return <<<DOC
         < $message >
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

    public function catLeft($message) {
        return <<<DOC
< $message >
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
