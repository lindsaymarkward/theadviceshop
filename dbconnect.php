<?php
try {
	// connect to SQLite database 
    $dbh = new PDO("sqlite:db/advice.sqlite"); 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>