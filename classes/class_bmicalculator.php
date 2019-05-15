<?php

class BmiCalculator {
  // Dit zijn de classvariables die je ook wel Fields noemt
  var $name;
  var $bodymass;
  var $bodylength; 

  // We gaan de constructor van de class maken. De constructor wordt altijd automagical aangeroepen wanneer we het woordje new gebruiken.
  function __construct($args = []) {
    $this->name = $args['name'] ?? 'onbekend';
    $this->bodymass = $args['bodymass'] ?? 0;
    $this->bodylength = $args['bodylength'] ?? 1;
  }

  function welkom() {
    echo "Hallo " . $this->name . ", je massa is " . $this->bodymass . "kg en je lengte is: " . $this->bodylength . "m. Je BMI-waarde is: " . $this->calculate_bmi() . "<hr>";
  }

  // Maak een method die met de bodymass en bodylength de bmi berekent
  // round(waarde, 1)
  function calculate_bmi() {
    return round($this->bodymass / ($this->bodylength * $this->bodylength), 1);
  }

}

?>