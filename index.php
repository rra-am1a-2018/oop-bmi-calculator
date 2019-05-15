<?php
  include("./classes/class_bmicalculator.php");

  // Maak een object van de class BmiCalculator
  $person1 = new BmiCalculator();

  // Geef de class variabeles een waarde
  $person1->name = "Arjan";
  $person1->bodylength = 1.8;
  $person1->bodymass = 300;

  // Geef de class variable length weer op de pagina
  echo "Hallo " . $person1->name . ", je massa is " . $person1->bodymass . "kg en je lengte is: " . $person1->bodylength . "m<hr>";

  // Maak een nieuwe instantie van de class BmiCalculator
  $person2 = new BmiCalculator(['name'=>'Evelien', 'bodymass'=>60, 'bodylength'=>1.65]);

  // Roep de welkom() method van de class BmiCalculator
  $person2->welkom();

  $person3 = new BmiCalculator(['name'=>'Fred', 'bodymass'=>75, 'bodylength'=>1.8]);
  $person3->welkom();
  
?>