<?php

$empCode = $_GET['emp_code'];

include 'DB_conn.php';

$sql = "DELETE FROM employee WHERE empCode = '{$empCode}'";
$result = mysqli_query($conn , $sql) or die("Query Unssuccessfull.");


mysqli_close($conn);

header("Location: index.php");
exit();

?>