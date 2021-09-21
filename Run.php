<?php

include('Race.php');
include('Track.php');
include('Car.php');
include('Element.php');
ini_set('display_errors', 1);

// test constructor
$car1 = new Car();
$car2 = new Car();
$car3 = new Car();
$car4 = new Car();
$car5 = new Car();
$track = new Track();

// run a race and print the results
// $test = new Race();
// $results = $test->runRace();
// print_r($results->getRoundResults());
