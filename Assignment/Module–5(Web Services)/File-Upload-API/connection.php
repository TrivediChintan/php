<?php

// Create database connection 
$con = new mysqli('localhost', 'root', '', 'assignment');

// Check connection 
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
