<?php

$name = $_POST['name'];
$designation = $_POST['designation'];
$birthDate = $_POST['birthDate'];
$joinDate = $_POST['joinDate'];
$addr1 = $_POST['addr1'];
$addr2 = $_POST['addr2'];
$city = $_POST['city'];
$state = $_POST['state'];


include 'DB_conn.php';

$sql = "INSERT INTO employee(name,designation,birthDate,joinDate,addr1,addr2,city,state) VALUES ('{$name}','{$designation}','{$birthDate}','{$joinDate}','{$addr1}','{$addr2}','{$city}','{$state}')";
$result = mysqli_query($conn , $sql) or die("Query Unsucessfull");

header("Location:http://localhost/crud/index.php");

mysqli_close($conn);


?>