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

$sql = "SELECT * FROM questionType ORDER BY id";
$reply = $db->query($sql);

// Return JSON encoded payload back
echo json_encode($reply->fetch_all());