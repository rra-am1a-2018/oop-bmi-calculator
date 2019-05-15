<?php

class Person {
  var $firstname;
  var $infix;
  var $lastname;

  function make_full_name() {
    return $this->firstname . " " . $this->infix . " " . $this->lastname;
  }
}

class BmiCalculator extends Person {
  // Dit zijn de classvariables die je ook wel Fields noemt  
  private $bodylength; 
  private $bodymass;

  // Getter en setter methods
  public function set_bodylength($bodylength) {
    if ( $bodylength < 0.546 || $bodylength > 2.75 ) {
      echo "Uw lengte is hoogstwaarschijnlijk niet correct opgegeven";
      $this->bodylength = -1;
    } else {
      $this->bodylength = $bodylength;
    }
  }

  public function set_bodymass($bodymass) {
    if ( $bodymass < 2 || $bodymass > 750 ) {
      echo "Uw massa is hoogstwaarschijnlijk niet correct opgegeven";
      $this->bodymass = 0;
    } else {
      $this->bodymass = $bodymass;
    }
  }

  

  // We gaan de constructor van de class maken. De constructor wordt altijd automagical aangeroepen wanneer we het woordje new gebruiken.
  function __construct($args = []) {
    $this->firstname = $args['firstname'] ?? 'voornaam onbekend';
    $this->infix = $args['infix'] ?? 'tussenvoegsel onbekend';
    $this->lastname = $args['lastname'] ?? 'achternaam onbekend';
    $this->bodymass = $args['bodymass'] ?? 0;
    $this->bodylength = $args['bodylength'] ?? 1;
  }

  function welkom() {
    echo "Hallo " . $this->make_full_name() . ", je massa is " . $this->bodymass . "kg en je lengte is: " . $this->bodylength . "m. Je BMI-waarde is: " . $this->calculate_bmi() . "<hr>";
  }

  // Maak een method die met de bodymass en bodylength de bmi berekent
  // round(waarde, 1)
  function calculate_bmi() {
    return round($this->bodymass / ($this->bodylength * $this->bodylength), 1);
  }

}

?>