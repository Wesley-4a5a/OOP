<?php


$aap = new een(2, 'scale', true);
$aap->lopen();
$spin = new twee(8, 'hair', false);
$spin->lopen();

class een{

public $eyes;
public $skin;
public $tail;

  function __construct($eyes, $skin, $tail){
    $this->eyes = $eyes;
    $this->skin = $skin;
    $this->tail = $tail;
    echo $this->eyes;
    echo '<br />Initial D<br />';

  }

  function lopen(){
    if($this->eyes == 8){
      echo 'dit is een spin';
    }
    else{
      echo 'iets anders';
    }

  }

}

class twee extends een{


}



 ?>
