<?php
// error reporting - E_ALL is the highest, for during development
error_reporting( E_ALL );
session_start();
try {
	// connect to SQLite database 
	$dbh = new PDO( "sqlite:db/advice.sqlite" );
} catch ( PDOException $e ) {
	echo $e->getMessage();
}
