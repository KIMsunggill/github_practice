<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Type Juggling</title>
</head>

<body>

<?php
	$PHP = "HTML";
	$HTML = "CSS";
	$CSS = "JavaScript";
	$JavaScript = "Ajax";
	$Ajax = "PHP";

	echo $PHP."<br>";			// HTML
	echo $$PHP."<br>";			// CSS
	echo $$$PHP."<br>";			// JavaScript
	echo $$$$PHP."<br>";		// Ajax
	echo $$$$$PHP."<br>";		// PHP
	echo $$$$$$PHP."<br>";		// HTML
	echo $$$$$$$PHP."<br>";		// CSS ...
?>

</body>

</html>
