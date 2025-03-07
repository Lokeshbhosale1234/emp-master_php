<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>

    <?php
    include 'DB_conn.php';

    $sql = "SELECT * FROM employee";
    $result = mysqli_query($conn , $sql) or die("Query Unsucessfull");                                                    // The function 'mysqli_query' is used to run SQL query . It's syntax is 'mysqli_connect( Connection Name , SQL query ); '
    
    if(mysqli_num_rows($result) > 0){                                                                                            // The Function 'mysqli_num_rows' counts the number of rows in the Variable/Array '$result' .                                                                               // 

    ?>

    <table cellpadding="7px">
        <thead>
        <th>EmpCode</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Date of Birth</th>
        <th>Date of Join</th>
        <th>Address1</th>
        <th>Address2</th>
        <th>City</th>
        <th>State</th>
        <th>Action</th>
        </thead>
        <tbody>

        <?php
        while($row = mysqli_fetch_assoc($result)){                                                 // The Function 'mysqli_fetch_assoc' fetches the rows of data from the Associative Array '$result' and stores it in the Associative array '$row" . 
       
        ?>
            <tr>
                <td><?php echo $row["empCode"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["designation"]; ?></td>
                <td><?php echo $row["birthDate"]; ?></td>
                <td><?php echo $row["joinDate"]; ?></td>
                <td><?php echo $row["addr1"]; ?></td>
                <td><?php echo $row["addr2"]; ?></td>
                <td><?php echo $row["city"]; ?></td>
                <td><?php echo $row["state"]; ?></td>
                <td>
                    <a href='edit.php?emp_code=<?php echo $row['empCode']?>'>Edit</a>
                    <a href='delete-inline.php?emp_code=<?php echo $row['empCode']?>'>Delete</a>
                </td>
            </tr>
            <?php  }  ?>
        </tbody>
    </table>

    <?php  }else{
        echo "<h2>No Record Found</h2>";
    }  
    mysqli_close($conn);                                              // The Function' mysqli_close( connection name ) ' is used to close the Connection. 
     
    ?>

</div>
</div>
</body>
</html>
