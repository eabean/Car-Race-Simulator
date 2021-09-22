<?php

include('Race.php');
ini_set('display_errors', 1);

// run a race and print the results
$test = new Race();
$results = $test->runRace();
// print_r($results->getRoundResults());
