<?php
session_start();

$con = mysqli_connect("localhost","root","") or die("Unable to connect");
  mysqli_select_db($con,"bharatsports");

include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Edit Profile </h6>
  </div>

  <div class="card-body">

  	<?php
   
   if (isset($_SESSION['success']) && $_SESSION['success'] !='') 
   {
     echo '<h3 style ="color:green;">'.$_SESSION['success'].'</h3>';
     unset($_SESSION['success']);
   }

   if (isset($_SESSION['status']) && $_SESSION['status'] !='') 
     {
       echo '<h3 style ="color:red;">'.$_SESSION['status'].'</h3>';
       unset($_SESSION['status']);
     }

   ?>

  	<?php


		if(isset($_POST['edit_btn']))
		{
			$id = $_POST['edit_id'];

			$query = "SELECT * FROM admin WHERE id='$id' ";
			$query_run = mysqli_query($con,$query);

			foreach ($query_run as $row)
			 {
							
  	            ?>

  	    <form action="code.php" method="POST" enctype ="multipart/form-data">
          
            <div class="form-group">
                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">

            	<img class="ad_dp_edit" src="<?php echo $row['dp']; ?>" width="100px" height="auto">
            	<div class="upload-btn-wrapper_edit">
                <button class="btns_edit">Upload pic &nbsp;<i class="fa fa-camera" aria-hidden="true"></i></button>
               <input type="file" name="upload" />
                </div>
            </div>    
            <div class="form-group">
               	<label> Username </label>
                <input type="text" name="edit_name" value="<?php echo $row['name']; ?>"  class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="edit_email" value="<?php echo $row['admin_id']; ?>" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="edit_password" value="<?php echo $row['password']; ?>"  class="form-control" placeholder="Enter Password">
            </div>
            <a href="register.php" class="btn btn-danger">Cancel</a>
            <button type="submit" name="update_btn" class="btn btn-primary">Update</button>

        </form>
            
            <?php
            	}
            }	
            ?>

     
        </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->











<?php
include('includes/scripts.php');
include('includes/footer.php');
?>