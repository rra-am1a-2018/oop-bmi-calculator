<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <main>
      <section class="container-fluid">
        <h1>BMI Calculator</h1>      
      </section>
      <section class="container">
        <div class="row">
          <div class="col-4"></div>
          <div class="col-4">
            <form>
              <div class="form-row">
                <div class="form-group col-4">
                  <label for="firstname">Voornaam</label>
                  <input type="text" class="form-control" id="firstname" placeholder="">
                </div>
                <div class="form-group col-4">
                  <label for="infix">Tussenvoegsel</label>
                  <input type="text" class="form-control" id="infix" placeholder="">
                </div>
                <div class="form-group col-4">
                  <label for="lastname">Achternaam</label>
                  <input type="text" class="form-control" id="lastname" placeholder="">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-4">
                  <label for="bodymass">Gewicht</label>
                  <input type="number" step="any" class="form-control" id="bodymass" placeholder="">
                </div>
                <div class="form-group col-4">
                  <label for="bodylength">Lengte</label>
                  <input type="number" step="any" class="form-control" id="bodylength" placeholder="">
                </div>
                <div class="form-group col-4">
                  <label for="age">Leeftijd</label>
                  <input type="number" class="form-control" id="age" placeholder="">
                </div>
              </div>  
              <div class="form-row"> 
                <div class="form-group col-4">    
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="male" checked>
                      <label class="form-check-label" for="exampleRadios1">
                        Man
                      </label>
                  </div>  
                </div>   
                <div class="form-group col-4">         
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="female">
                      <label class="form-check-label" for="exampleRadios2">
                        Vrouw
                      </label>
                  </div>
                </div>
                <div class="form-group col-4">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="trans">
                      <label class="form-check-label" for="exampleRadios3">
                        Trans
                      </label>
                  </div>
                </div>
              </div>
              
              <div class="form-row">
                <div class="form-group col-12">              
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Bereken BMI</button>
                </div>
              </div>
            </form>            
          </div>
          <div class="col-4"></div>
        </div>
      </section>

    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>




<?php
  include("./classes/class_bmicalculator.php");

  // Maak een object van de class BmiCalculator
  $person1 = new BmiCalculator();

  // Geef de class variabeles een waarde
  $person1->set_firstname('Arjan');
  $person1->set_infix('de');
  $person1->set_lastname('Ruijter');
  $person1->set_bodylength(1.8);
  $person1->set_bodymass(300);

  // Geef de class variable length weer op de pagina
  echo "Hallo " . $person1->get_firstname() . ", je massa is " . $person1->get_bodymass() . " en je lengte is: " . $person1->get_bodylength() . "<hr>";
  $person1->welkom();
  // Maak een nieuwe instantie van de class BmiCalculator
  $person2 = new BmiCalculator(['firstname'=>'Evelien',
                                'infix'=>'van der',
                                'lastname'=>'Veer',
                                'bodymass'=>60, 
                                'bodylength'=>1.65]);

  // Roep de welkom() method van de class BmiCalculator
  $person2->welkom();

  $person3 = new BmiCalculator(['firstname'=>'Fred',
                                'infix'=>'de',
                                'lastname'=>'Beer',
                                'bodymass'=>7500, 
                                'bodylength'=>1.8]);
  $person3->welkom();
  
?>