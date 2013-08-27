<?php

	$mysqli = new mysqli("localhost", "root", "", "timeline");

	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$title = $_POST['title'];
	$text = $_POST['text'];
	
	$query = 'insert into event (day, month, year, title, text) values (?,?,?,?,?)';
	$stmt = $mysqli->stmt_init();
	
	if ($stmt->prepare($query)) { 
		$stmt->bind_param('sssss', $day, $month, $year, $title, $text);
		$stmt->execute();
	}
	echo "Done.";
?>