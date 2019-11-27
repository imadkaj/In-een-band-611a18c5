<?php
$prijs = 0;
echo "het albumoverzicht :".PHP_EOL;
$band = array ("N.W.A"=> 4.5, "all eyez on me" => 20, "The Eminem Show" => 12);

foreach ($band as $key => $value) {
   echo $key." kost ".$value. PHP_EOL; # code...
 $prijs +=$value;
}
 echo "prijs is ". $prijs. PHP_EOL;
echo "gemidelde prijs is ". $prijs/count($band);
?>