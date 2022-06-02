<?php
session_start();

require 'dbconfig.php';

include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype ="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label> Profile Picture </label>
                <div class="upload-btn-wrapper">
                <button class="btns">Upload pic &nbsp;<i class="fa fa-camera" aria-hidden="true"></i></button>
               <input type="file" name="upload" />
            </div>
            </div>
            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h4 class="m-0 font-weight-bold text-primary">All Registered Customers
            
    </h4>
  </div>

  <div class="card-body">


   <?php
   
   if (isset($_SESSION['success']) && $_SESSION['success'] !='') 
   {
     echo '<h4 style ="color:green;">'.$_SESSION['success'].'</h4>';
     unset($_SESSION['success']);
   }

   if (isset($_SESSION['status']) && $_SESSION['status'] !='') 
     {
       echo '<h4 style ="color:red;">'.$_SESSION['status'].'</h4>';
       unset($_SESSION['status']);
     }

   ?> 


    <div class="table-responsive">

    <?php

        $query = "SELECT * FROM `userinfo`";
        $query_run = mysqli_query($con,$query);

    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Display Pic </th>
            <th> Username </th>
            <th> Address </th>
            <th> Contact </th>
            <th>Email </th>
            <th>Password</th>
            <th>View </th>
            <th>Delete </th>
          </tr>
        </thead>
        <tbody>
        <?php
              if(mysqli_num_rows($query_run) > 0)
              {
                  while($row = mysqli_fetch_assoc($query_run))
                  {
                    
        ?>

          <tr style="font-size: 12px;">
            <td><?php echo $row['userid']; ?></td>
            <td><center><img class="ad_dp" src="../<?php echo $row['dp']; ?>" width="100px" height="auto"></center></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['contact']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td>
                <form action="#" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['userid']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success">View</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="POST">
                  <input type="hidden" name="user_del_id" value="<?php echo $row['userid']; ?>">
                  <input type="hidden" name="user_del_name" value="<?php echo $row['name']; ?>">
                  <button type="submit" name="user_del_btn" class="btn btn-danger"> DEL</button>
                </form>
            </td>
          </tr>
          <?php
              }
            }

          ?>  
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>