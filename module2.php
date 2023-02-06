<?php
$tution = 20000;

$commission = ($tution > 20000) ? 0.25 * $tution : 
              (($tution >= 10000 && $tution <= 20000) ? 0.20 * $tution : 
              (($tution >= 7000 && $tution < 10000) ? 0.15 * $tution : 
              "Invalid Data"));

echo "The commission is $" . $commission;
?>