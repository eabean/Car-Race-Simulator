<?php

include('Race.php');
// include('Track.php');
// include('Car.php');
// include('Element.php');
ini_set('display_errors', 1);

// run a race and print the results
$test = new Race();
$results = $test->runRace();
print_r($results->getRoundResults());
