<?php

/*$dateTime = new DateTime('10/8/25 9:14PM');

echo $dateTime->getTimezone()->getName() . ' - ' . $dateTime->format('m/d/Y g:i A') . '<br/>';

$dateTime->setTimezone(new DateTimeZone('Europe/London'));

echo $dateTime->getTimezone()->getName() . ' - ' . $dateTime->format('m/d/Y g:i A') . '<br/>';*/

/**
 * Working with different tine zone
 * - what if the date is formatted different, for example request from API?
 */

/*$date = '12/05/2021 3:30PM';

$dateTime = DateTime::createFromFormat('d/m/Y g:iA', $date);

var_dump($dateTime);*/

/**
 * Comparing DateTime
 */

/*$dateTime1 = new DateTime('05/25/2021 9:15 AM');
$dateTime2 = new DateTime('05/25/2021 9:14 AM');
$dateTime3 = new DateTime('03/15/2021 9:14 AM');*/

//var_dump($dateTime1->diff($dateTime2));
//var_dump($dateTime1->diff($dateTime2)->format("%Y years, %m months, %d days, %h hours, %i minutes, %s seconds"));

/*var_dump($dateTime1 < $dateTime2);
var_dump($dateTime1 > $dateTime2);
var_dump($dateTime1 == $dateTime2);
var_dump($dateTime1 <=> $dateTime2);*/

/**
 * Iterating Date
 */

$period = new DatePeriod(new DateTime("05/01/2021"), new DateInterval("P1D"), (new DateTime("5/31/2021"))->modify("+1 Day"));

foreach ($period as $date) { {
    echo $date->format('Y-m-d') . '<br/>';
}}

