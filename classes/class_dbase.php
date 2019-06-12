<?php

class Dbase {
  // Fields
  private $servername = "www.oop-bmi-calculator-am1a.org";
  private $username = "bmi_moderator_am1a";
  private $password = "8tAijvr7zmYvMRII";
  private $dbase = "bmi_calculator_am1a";
  private $conn;

  // Constructor
  public function __construct() {
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbase);
  }

  public function insert_record($raw_data) {
    $firstname = $this->sanitize($raw_data["firstname"]);
    $infix = $this->sanitize($raw_data["infix"]);
    $lastname = $this->sanitize($raw_data["lastname"]);
    $bodymass = $this->sanitize($raw_data["bodymass"]);
    $bodylength = $this->sanitize($raw_data["bodylength"]);
    $age = $this->sanitize($raw_data["age"]);
    $gender = $this->sanitize($raw_data["gender"]);
    
    $sql = "INSERT INTO `bmi_data` (`id`,
                                    `firstname`, 
                                    `infix`, 
                                    `lastname`, 
                                    `bodymass`, 
                                    `bodylength`, 
                                    `age`, 
                                    `gender`) 
                            VALUES (NULL, 
                                    '$firstname', 
                                    '$infix', 
                                    '$lastname', 
                                    '$bodymass', 
                                    '$bodylength', 
                                    '$age', 
                                    '$gender')";
    $this->conn->query($sql);
    header("Location: ./index.php");
  }

  private function sanitize($raw_data) {
    $data = htmlspecialchars($raw_data);
    $data = $this->conn->real_escape_string($data);
    return $data;
  }

  public function select_all() {
    include("./classes/class_bmicalculator.php");
    $sql = "SELECT * FROM `bmi_data`";
    $result = $this->conn->query($sql);
    while ($row = $result->fetch_assoc()) {
      // Maak hier een <tr><td> constructie voor de table op index.php
      $bmi_calc = new BmiCalculator(["bodymass" => $row["bodymass"], "bodylength" => $row["bodylength"]]);
      echo "<tr>
              <th scope='row'>".$row["id"] ."</th>
              <td>".$row["firstname"] ."</td>
              <td>".$row["infix"] ."</td>
              <td>".$row["lastname"] ."</td>
              <td>".$row["bodymass"] ."</td>
              <td>".$row["bodylength"] ."</td>
              <td>".$row["age"] ."</td>
              <td>".$row["gender"] ."</td>
              <td>".$bmi_calc->calculate_bmi() ."</td>
              <td>".$row["gender"] ."</td>
            </tr>";
    }
  }
}

?>