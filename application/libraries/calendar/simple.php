<?php
require_once 'src/apiClient.php';
require_once 'src/contrib/apiCalendarService.php';
session_start();

$client = new apiClient();
$client->setApplicationName("Google Calendar PHP Starter Application");

// Visit https://code.google.com/apis/console?api=calendar to generate your
// client id, client secret, and to register your redirect uri.
 $client->setClientId('815239357259-50u1740tsucb6rgqobogpn6b3v2i0dke.apps.googleusercontent.com');
 $client->setClientSecret('KHwxsR0l8Y7q6OgHHPSwLs58');
 $client->setRedirectUri('http://localhost/calendar-test/examples/calendar/simple.php');
 $client->setDeveloperKey('AIzaSyDTX2xpl6np1exKR8rasfkgPG7XM7b6Zos');
$cal = new apiCalendarService($client);
if (isset($_GET['logout'])) {
  unset($_SESSION['token']);
}

if (isset($_GET['code'])) {
  $client->authenticate();
  $_SESSION['token'] = $client->getAccessToken();
  header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
}

if (isset($_SESSION['token'])) {
  $client->setAccessToken($_SESSION['token']);
}

if ($client->getAccessToken()) {
  $calList = $cal->calendarList->listCalendarList();
  $event = new Event();
  	//$event->setId('test1');
	$event->setSummary('seango01');
	$event->setLocation('tainan');
	$start = new EventDateTime();
	$start->setDateTime('2014-05-16T10:00:00.000+08:00');
	$start->setTimeZone('Asia/Taipei');
	$event->setStart($start);
	$end = new EventDateTime();
	$end->setDateTime('2014-05-16T10:25:00.000+08:00');
	$end->setTimeZone('Asia/Taipei');
	$event->setEnd($end);
	$attendee1 = new EventAttendee();
	$attendee1->setEmail('sean820117@gmail.com');
	// ...
	$attendees = array($attendee1,
	                   // ...
	                   );
	$event->attendees = $attendees;
	$recurringEvent = $cal->events->insert('primary', $event);

	//echo $recurringEvent->getId();
  //print "<h1>Calendar List</h1><pre>" . print_r($calList, true) . "</pre>";


$_SESSION['token'] = $client->getAccessToken();
} else {
  $authUrl = $client->createAuthUrl();
  print "<a class='login' href='$authUrl'>Connect Me!</a>";
}