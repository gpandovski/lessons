<?php

// DateTime class
$format = "Y,m,d";
$time = "2009,2,26";
$date = DateTime::createFromFormat($format, $time);

$yesterday = new DateTime('yesterday');
 
$twoDaysLater = new DateTime('+ 2 days');
 
$oneWeekEarly = new DateTime('- 1 week');

$yesterdayInSingapore = new DateTime('yesterday', new DateTimeZone('Singapore'));
	
$dateTime = new DateTime('2015-01-01 12:30:12');

// Y: four digit representation of the year (eg: 2016)
// y: two digit representation of the year (eg: 16)
// m: month, as a number (01 to 12)
// M: month, as three letters (Jan, Feb, Mar, etc)
// j: day of the month, with no leading zeroes (1 to 31)
// D: day of the week, as three letters (Mon, Tue, Wed, etc)
// h: hour (12-hour format) (01 to 12)
// H: hour (24-hour format) (00 to 23)
// A: either AM or PM
// i: minute, with leading zeroes (00 to 59)
// s: second, with leading zeroes (00 to 59)
// The complete list can be found here

$date = new DateTime('2000-05-26T13:30:20'); /* Friday, May 26, 2000 at 1:30:20 PM */

$date->format("H:i");
/* Returns 13:30 */

$date->format("H i s");
/* Returns 13 30 20 */

$date->format("h:i:s A");
/* Returns 01:30:20 PM */

$date->format("j/m/Y");
/* Returns 26/05/2000 */

$date->format("D, M j 'y - h:i A");
/* Returns Fri, May 26 '00 - 01:30 PM */


$date = new DateTime();
$date->setDate(2016, 7, 25);

//Add or Subtract Date Intervals

$now = new DateTime();// empty argument returns the current date
$interval = new DateInterval('P7D');//this objet represents a 7 days interval
$lastDay = $now->add($interval); //this will return a DateTime object
$formatedLastDay = $lastDay->format('Y-m-d');//this method format the DateTime object and returns a String
echo "Samara says: Seven Days. You'll be happy on $formatedLastDay.";

$today = new DateTime('today');
 
echo $today->format('Y-m-d') . PHP_EOL;
 
$today->modify('-2 days');
 
echo $today->format('Y-m-d') . PHP_EOL;
 
// Output
 

// Comparision

$today = new DateTime('today');
$yesterday = new DateTime('yesterday');
 
var_dump($today > $yesterday);
var_dump($today < $yesterday);
var_dump($today == $yesterday);
 
// Output
bool(true)
bool(false)
bool(false)