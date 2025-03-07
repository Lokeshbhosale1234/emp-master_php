<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="empCode" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php
    if(isset($_POST['showbtn'])){
        include 'DB_conn.php';

    $emp_code = $_POST['empCode'];

    $sql = "SELECT * FROM employee WHERE empCode = {$emp_code}";
    $result = mysqli_query($conn , $sql) or die("Query Unsucessfull");                                                    // The function 'mysqli_query' is used to run SQL query . It's syntax is 'mysqli_connect( Connection Name , SQL query ); '
    
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){                                                                                         // The Function 'mysqli_num_rows' counts the number of rows in the Variable/Array '$result' .                                                               
    

    ?>


    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
        <label>Name</label>
          <input type="hidden" name="empCode" value="<?php echo $row['empCode'];?>"/>
          <input type="text" name="name" value="<?php echo $row['name'];?>"/>
      </div>
      <div class="form-group">
          <label>Designation</label>
          <input type="text" name="designation" value="<?php echo $row['designation'];?>"/>
      </div>
      <div class="form-group">
          <label>Date of Birth</label>
          <input type="text" name="birthDate" value="<?php echo $row['birthDate'];?>"/>
      </div>
      <div class="form-group">
          <label>Date of Joining</label>
          <input type="text" name="joinDate" value="<?php echo $row['joinDate'];?>"/>
      </div>
      <div class="form-group">
          <label>Address1</label>
          <input type="text" name="addr1" value="<?php echo $row['addr1'];?>"/>
      </div>
      <div class="form-group">
          <label>Address2</label>
          <input type="text" name="addr2" value="<?php echo $row['addr2'];?>"/>
      </div>
      <div class="form-group">
          <label>City</label>
          <input type="text" name="city" value="<?php echo $row['city'];?>"/>
      </div>
      <div class="form-group">
          <label>State</label>
          <input type="text" name="state" value="<?php echo $row['state'];?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>

    <?php
        }
    }
}
    ?>

</div>
</div>
</body>
</html>
