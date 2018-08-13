<?php
  include('bd.php');
  $array = [];
  $result = $mysqli->query("SELECT * FROM schools");
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          //var_dump($row);
          array_push($array, $row);
      }
  } else {
      echo "0 results";
  }
  for ($i=10; $i < count($array); $i++) {
    $a = $array[$i]["address"];
    $a = str_replace(' ', '%20', $a);
    sleep(2);
    $x = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?api_key=api_key=AIzaSyC1r-q9h62dDi84nMG3s0-C6MRG7u495E8&address='.$a.'');
    $x = json_decode($x);
    var_dump($x->results);
    //var_dump($x->results[0]->geometry->location);
    echo "<br><br>";
    //var_dump($x->results->geometry->location);
    //$x = json_decode($x);
    //var_dump($x->results->geometry->location);
  }
?>
