<?php 

function angka($number){
  
  $unitSize = 1000;
  $units = ["", "K", "Jt", "M", "T"];
  $unitsCount = ($number === 0) ? 0 : floor(log(abs($number), $unitSize));
  $unit = $units[min($unitsCount, count($units) - 1)];
  $value = round($number / pow($unitSize, $unitsCount));
  echo $value . $unit;
}

?>