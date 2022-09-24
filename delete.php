<?php
// include database connection file
require_once 'connection.php';
// Code for record deletion

//Get row id
$uid = intval($_GET['del']);
//Qyery for deletion
$sql = "delete from carsinfo WHERE  carID=:id";
// Prepare query for execution
$query = $conn->prepare($sql);
// bind the parameters
$query->bindParam(':id', $uid, PDO::PARAM_STR);
// Query Execution
$query->execute();

echo "<script>window.location.href='index.php'</script>";
