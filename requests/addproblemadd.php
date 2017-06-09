<?php
// Report all Errors
error_reporting(E_ALL);

// Set values for server and database
$host = "localhost";
$user = "root";
$pass = "root";
$databaseName = "trivial";

// Open up a new connection to mysql using the values provided above
$db = new mysqli($host, $user,$pass, $databaseName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$sql = "INSERT INTO question (questionType, description, answera, answerb, answerc, answerd, correctAnswer)
VALUES ('" . $_REQUEST['questionType'] . "', '" . $_REQUEST['description'] . "', '" . $_REQUEST['answera']
    . "', '" . $_REQUEST['answerb'] . "', '" . $_REQUEST['answerc'] . "', '" . $_REQUEST['answerd'] . "', '"
    . $_REQUEST['correctAnswer'] . "')";

if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $sql->error;
}