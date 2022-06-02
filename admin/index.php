<?php
require 'dbconfig.php';

include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<!-- Auto Welcome Modal-->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       
         <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
         <h3 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: green;">Welcome Dear Admin<br> <?php echo $adminname; ?></h3> <br>
        <div style="display: inline-flex; margin-left: 23%;" class="Welcome" > 
                <h5 style="color: black;font-family: Times Roman ; ">Have a Nice Day,</h5><h5 style="color: blue;font-family: Times Roman ; ">  "Do Well Man"</h5>
      </div>
      </div>
      
    </div>
  </div>
</div>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
               <?php

                  $query = "SELECT id FROM admin ORDER BY id ";
                  $query_run = mysqli_query($con,$query);

                  $row = mysqli_num_rows($query_run);

               ?>
               <h5>Total Admin: <?php echo $row ;?> </h5>

              </div>
            </div>
            <div class="col-auto">
             <i class="fa fa-user-secret" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Registered User</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

              <?php

               $query = "SELECT userid FROM userinfo ORDER BY userid ";
               $query_run = mysqli_query($con,$query);

               $row = mysqli_num_rows($query_run);
               ?>
              <h5>Total User: <?php echo $row; ?></h5>

             </div>
            </div>
            <div class="col-auto">
              <i class="fa fa-users" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>


    
     <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Product </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                  
                  	 <?php

               			$query = "SELECT id FROM `product` ORDER BY id ";
               			$query_run = mysqli_query($con,$query);

               			$row = mysqli_num_rows($query_run);
               		 ?>
              			<h5>Total Product: <?php echo $row; ?></h5>                  		

                  </div>
            </div>
            <div class="col-auto" id="cart">
              <i  class="fa fa-cart-plus" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->








  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>