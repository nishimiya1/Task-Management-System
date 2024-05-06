<?php
$serverName = "localhost";
$username = "root";
$password = "";
$userDbName = "UserManagement";
$taskDbName = "TaskManagement";
$userConn = new mysqli($serverName, $username, $password, $userDbName);

if ($userConn->connect_error) {
    die("Connection to UserManagement database failed: " . $userConn->connect_error);
}
$taskConn = new mysqli($serverName, $username, $password, $taskDbName);

// Check connection to Task Management database
if ($taskConn->connect_error) {
    die("Connection to Task Management database failed: " . $taskConn->connect_error);
}

?>