<?php

$empCode = $_GET['emp_code'];

include 'DB_conn.php';

$sql = "DELETE FROM employee WHERE empCode = '{$empCode}'";
$result = mysqli_query($conn , $sql) or die("Query Unssuccessfull.");

header("Location:http://localhost/crud/index.php");

mysqli_close($conn);

?>