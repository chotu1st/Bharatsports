<?php
session_start();
error_reporting(0);
require 'dbconfig.php';

include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add More Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype ="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label>Product Category</label>
                <div>
                <select name="category">
                      <option value="cbat">Criket Bat</option>
                      <option value="cball">Cricket Ball</option>
                      <option value="cdress">Cricket Dress</option>
                      <option value="cbag">Cricket Kit Bag</option>
                      <option value="cshoes">Cricket Shoes</option>

                      <option value="fball">Football Ball</option>
                      <option value="fdress">Football Dress</option>
                      <option value="fshoes">Football Shoes</option>
                      <option value="fitem">Football Accessories</option>

                      <option value="kdress">Karate Dress</option>
                      <option value="kgloves">Karate Gloves</option>
                      <option value="kkickpad">Karate Kickpad</option>
                      <option value="kpunchingbag">Karate Punchingbag</option>

                      <option value="homegym">Home Gym Item</option>
                      <option value="hsup">Health Supplyment</option>
                      <option value="gdress">Gym Exercise Dress</option>
                      <option value="gitem">Gym Accessories</option>

                      <option value="hdress">Hockey Dress</option>
                      <option value="hstick">Hockey Stick</option>
                      <option value="hball">Hockey Ball</option>
                      <option value="hshoes">Hockey Shoes</option>

                      <option value="stshirt">Sports Tshirt</option>
                      <option value="sshoes">Sports Shoes</option>
                      <option value="slower">Sports Lower</option>
                      <option value="tracksuit">Sports Tacksuit</option>

                      <option value="other">Other Product</option>

               </select>
             </div>
            </div>
            
            <div class="form-group">
                <label> Product Name </label>
                <input type="text" name="pro_name" class="form-control" placeholder="Enter product name & short description">
            </div>

            <div class="form-group">
                <label>Price of Product</label>
                <input type="text" name="pro_price" class="form-control" placeholder="Enter price in rupees">
            </div>

            <div class="form-group">
                <label>Quantity of Product</label>
                <input type="number" name="qty" class="form-control" placeholder="Enter Quantity">
            </div>

            <div class="form-group">
                <label> Product Image </label>
                <div class="upload-btn-wrapper">
                <button class="btns">Upload Img &nbsp;<i class="fa fa-camera" aria-hidden="true"></i></button>
               <input type="file" name="upload" />
            </div>
            </div>            
            
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="pupload_btn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Product Detail &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
             <i class="fas fa-plus"></i>
             Add Product 
            </button>

            <button type="submit" name="del_mul_data" class="btn btn-danger"  onclick="toggleCheckbox(this)">Delete Multiple Data</button>
    </h6>
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

        $query = "SELECT * FROM product";
        $query_run = mysqli_query($con,$query);
        $x = mysqli_num_rows($query_run);
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr style="text-align: center;">
          	 <th> Check </th>
            <th> ID </th>
            <th> Product Image </th>
            <th> Category </th>
            <th> Product Name </th>
            <th> QTY </th>
            <th> Price </th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
        <?php
              if(mysqli_num_rows($query_run) > 0)
              {
                  while($row = mysqli_fetch_assoc($query_run))
                  {

                    
        ?>

      <tr>
        <form action="code.php" method="POST" enctype ="multipart/form-data">
        	<td><input type="checkbox" name="" value="<?php echo $row['id']; ?>"></td>
            <td><?php echo $row['id']; ?></td>
            <td><center>
            <div class="xxx">
            <img class="pro_img" src="../<?php echo $row['img']; ?>" width="auto" height="auto" style="max-height: 120px; max-width: 120px">
            <div class="upload-btn-wrapper_edit">
                <button class="btns_editx">Upload</i></button>
               <input type="file" name="upload" />
            </div>
          </div>

            </center></td>


            <td class="category"><textarea name="category" ><?php echo $row['category']; ?></textarea></td>
            <td class="pro_name"><textarea name="edit_pro_name" ><?php echo $row['name']; ?></textarea></td>
            <td class="qty"><textarea name="qty" ><?php echo $row['stock']; ?></textarea></td>
            <td class="pro_price"></i><textarea name="pro_price" ><?php echo $row['price']; ?></textarea></td>
            <td>
                   <input type="hidden" name="pro_edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="pro_update_btn" class="btn btn-success"> Update</button>                              
            </td>
            <td>
                  <input type="hidden" name="pro_delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="pro_delete_btn" class="btn btn-danger"> DELETE</button>
            </td>

      </form>
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
?>

<script>

	function toggleCheckbox(box)
	{
		var id = $(box).attr("value");

		if($(box).prop("checked")==true)
		{
			var visible = 1;
		}
		{
			var visible = 0;
		}

	var	data = {
					"search-_data":1,
					"id":id,
					"visible":visible
	}
		
	$.ajax({
		type: "post",
		url:"code.php",
		data: data,
		dataType: "dataType",
		success: function(response){

		}
	});

	}

</script

<?php
include('includes/footer.php');
?>

