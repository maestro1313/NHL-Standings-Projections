<?php
$wins = $_POST['wins'];
$otlsol = $_POST['otl/sol'];
$gp = $_POST['gp'];

$gmsWPts = $wins + $otlsol;
$factor1 = $gmsWPts * 100;
$percentOfGmsWPts = $factor1 / $gp;
$percentOfGmsWPts = $percentOfGmsWPts / (pow(10, 2));
//how many of those games were wins, how many were otl/sol
$factor2 = $wins * 100;
$percentGmsPlayedWins = $factor2 / $gp;
$percentGmsPlayedWins /= pow(10, 2);
$howManyWereWins = 82 * $percentGmsPlayedWins;
//how many points from wins
$ptsFromWins = $howManyWereWins * 2;
$factor3 = $otlsol * 100;
$percentOfOtlSol = $factor3 / $gp;
$percentOfOtlSol /= pow(10, 2);
$numOfotlsolPer82 = 82 * $percentOfOtlSol;
$ptsFromSolOtl = $numOfotlsolPer82 * 1;
//add points from wins to points from otl/sol
$totalPts = $ptsFromWins + $ptsFromSolOtl;
$totalPts = round($totalPts, 0);
echo '<p style="font-size:50px;text-align:center";>They will have '. $totalPts.' points this season.</p>';