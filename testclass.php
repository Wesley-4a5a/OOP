<?php

class hondenJong{

  var $hond;
  var $aap;
  var $noot;

  function __construct($num1, $num2, $num3){
    $this->hond = $num1;
    $this->aap = $num2;
    $this->noot = $num3;
  }

  // function setVar(){
  //   $this->hond = 'Static 1';
  //   $this->aap = 'Static 2';
  //   $this->noot = 'Static 3';
  // }

  function testEcho($ditisookmogelijk){
    // echo $this->aap;
    echo $this->hond;
    echo $ditisookmogelijk;  //dit werkt IN de functie zelf.
    $this->parameterHandle = $ditisookmogelijk; //wil je de attribute meenemen? MOET $this->varnaam = parameter;
  }

  function echoTwee(){
    echo '<br /><br />';
    echo $this->parameterHandle;     //Dit is de parameter van testEcho
    echo '<br /><br />';
    echo $this->noot;
  }

}
 ?>
