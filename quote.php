#!/usr/bin/php
<?php
	//Gets the first parameter while running in command line
	$symbol = $argv[1];

	//Downloads a CSV file
	$url = "http://download.finance.yahoo.com/d/quotes.csv?s=$symbol&f=sl1d1t1c1ohgv&e=.csv";

	//print($url);
	//print("\n");
	//exit;

	//Opens the CSV file
	$fp = fopen($url, "r");

	//Does the parsing of the CSV file
	$row = fgetcsv($fp);

	fclose($fp);

	//Prints recursevely
	//print_r($row);

	//Prints the second column of the first row using printf C-like syntax 
	printf("%.2f\n", $row[1])
?>