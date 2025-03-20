<?php

$empCode = $_POST['empCode'];
$name = $_POST['name'];
$designation = $_POST['designation'];
$birthDate = $_POST['birthDate'];
$joinDate = $_POST['joinDate'];
$addr1 = $_POST['addr1'];
$addr2 = $_POST['addr2'];
$city = $_POST['city'];
$state = $_POST['state'];


include 'DB_conn.php';

$sql = "UPDATE employee SET name = '{$name}',designation = '{$designation}', birthDate = '{$birthDate}', joinDate = '{$joinDate}',addr1 = '{$addr1}',addr2 = '{$addr2}',city ='{$city}',state = '{$state}' WHERE empCode = '{$empCode}'";
$result = mysqli_query($conn , $sql) or die("Query Unsucessfull");

//header("Location:http://localhost/crud/index.php");
header("Location: index.php");
exit();


mysqli_close($conn);






?>