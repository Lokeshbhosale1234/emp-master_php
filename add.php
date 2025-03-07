<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" />
        </div>
        <div class="form-group">
            <label>Designation</label>
            <input type="text" name="designation" />
        </div>
        <div class="form-group">
            <label>Date of Birth</label>
            <input type="text" name="birthDate" />
        </div>
        <div class="form-group">
            <label>Date of Joining</label>
            <input type="text" name="joinDate" />
        </div>
        <div class="form-group">
            <label>Address1</label>
            <input type="text" name="addr1" />
        </div>
        <div class="form-group">
            <label>Address2</label>
            <input type="text" name="addr2" />
        </div>
        <div class="form-group">
            <label>City</label>
            <input type="text" name="city" />
        </div>
        <div class="form-group">
            <label>State</label>
            <input type="text" name="state" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
