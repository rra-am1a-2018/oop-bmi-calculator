<?php
include("./classes/class_person.php");

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
  public function get_bodylength() {
    return $this->bodylength . "m";
  }
  public function get_bodymass() {
    return $this->bodymass . "kg";
  }
  

  // We gaan de constructor van de class maken. De constructor wordt altijd automagical aangeroepen wanneer we het woordje new gebruiken.
  public function __construct($args = []) {
    $this->firstname = $args['firstname'] ?? 'voornaam onbekend';
    $this->infix = $args['infix'] ?? 'tussenvoegsel onbekend';
    $this->lastname = $args['lastname'] ?? 'achternaam onbekend';
    $bodymass = $args['bodymass'] ?? 0;
    $this->set_bodymass($bodymass);
    $this->bodylength = $args['bodylength'] ?? 1;
  }

  public function welkom() {
    echo "Hallo " . $this->make_full_name() . "<br>Je massa is " . $this->bodymass . "kg<br> Je lengte is: " . $this->bodylength . "m.<br>Je BMI-waarde is: " . $this->calculate_bmi() . "<br>" . $this->interpretation_bmi() . "<hr>";
  }

  // Maak een method die met de bodymass en bodylength de bmi berekent
  // round(waarde, 1). Dit is een soort helperclass voor intern gebruik binnen de class
  private function calculate_bmi() {
    return round($this->bodymass / ($this->bodylength * $this->bodylength), 1);
  }

  private function interpretation_bmi() {
    $interpretation = "";
    $bmi = $this->calculate_bmi();
    switch(true) {
      case ($bmi < 18.5):
        $interpretation = "U heeft ondergewicht";
        break;
      case ($bmi >= 18.5 && $bmi < 25):
        $interpretation = "U heeft normaal gewicht";
        break;
      case ($bmi >= 25 && $bmi < 27):
        $interpretation = "U heeft licht overgewicht";
        break;
      case ($bmi >= 27 && $bmi < 30):
        $interpretation = "U heeft matig overgewicht";
        break;
      case ($bmi >= 30 && $bmi < 40):
        $interpretation = "U heeft ernstig overgewicht";
        break;
      case ($bmi >= 40):
        $interpretation = "U heeft ziekelijk overgewicht";
        break;
      default:
        $interpretation = "Wij kunnen geen uitspraak doen over uw gewicht";
        break;
    }
    return $interpretation;
  }


}

?>