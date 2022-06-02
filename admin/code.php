<?php 

include('security.php');

$con = mysqli_connect("localhost","root","") or die("Unable to connect");
	   mysqli_select_db($con,"jks");

if(isset ($_POST['registerbtn']))
{
	    
		   if ($_FILES['upload']['size'] == 0 )
                    {                      
                      $dp ="profile pic/default_dp.png";
                    }
                    else
                    {
                      $filename = $_FILES ["upload"] ["name"];
                      $tempname = $_FILES ["upload"] ["tmp_name"];
                      $folder = "profile pic/".$filename;
                      $dp = $folder;
                    }
					
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['confirmpassword'];

	if ($password === $cpassword)
	{

		$query ="INSERT INTO admin (dp,name,admin_id,password) VALUES ('$dp','$username','$email','$password')";
		$query_run = mysqli_query($con,$query);


		if($query_run)
		{
		//echo "Saved";
			move_uploaded_file($tempname, $folder);
			$_SESSION['success'] = "Admin Profile Added";
			header('Location: register.php');
		}
		else
		{
			$_SESSION['status'] = "Admin Profile Not Added";
			header('Location: register.php');
		}
	}
	else
	{
		$_SESSION['status'] = "Password Did not match with Confirm Password";
			header('Location: register.php');
	}

}



if(isset($_POST['update_btn']))
{
		$filename = $_FILES ["upload"] ["name"];
		$tempname = $_FILES ["upload"] ["tmp_name"];
		$folder = "profile pic/".$filename;

	$id = $_POST['edit_id'];
	$dp = $folder;
	$newname = $_POST['edit_name'];
	$newemail = $_POST['edit_email'];
	$newpassword = $_POST['edit_password'];

	 if($_FILES['upload']['name']=='')
		{
               $query = "UPDATE admin SET name='$newname', admin_id='$newemail', password='$newpassword' WHERE id='$id'";
        }		
     else
        {					   

               $query = "UPDATE admin SET dp='$dp', name='$newname', admin_id='$newemail', password='$newpassword' WHERE id='$id'";
        }

	
	$query_run = mysqli_query($con,$query);
	if($query_run)
	{
		         
            move_uploaded_file($tempname, $folder);
			$_SESSION['success'] = "Profile Updated";
		    header('Location: register.php');
		
	}
	else
	{
		$_SESSION['status'] = "Profile do not Updated !";
		header('Location: register.php');
	}
}



if(isset($_POST['delete_btn']))
{
	$id =$_POST['delete_id'];

	$query = "DELETE FROM `admin` WHERE id='$id';";
	$query_run = mysqli_query($con,$query);

	if ($query_run)
	{	 
		$_SESSION['success'] = "Your Data is Deleted";
		header('Location: register.php');
 	}
 	else
 	{
 		$_SESSION['status'] = "Your Data is Not Deleted !";
		header('Location: register.php');
 	}
}


#-----------------------------------------------Product upload codes here-----------------------------------------------
if(isset ($_POST['pupload_btn']))
{
	    $filename = $_FILES ["upload"] ["name"];
		$tempname = $_FILES ["upload"] ["tmp_name"];
		$folder = "product/".$filename;
		$move = "../".$folder;			
	$pro_img = $folder;
	$category = $_POST['category'];
	$pro_name = $_POST['pro_name'];
	$pro_price = $_POST['pro_price'];
    $qty = $_POST['qty'];

        $query ="SELECT `img` FROM `product` WHERE img='$pro_img'";
		$query_run = mysqli_query($con,$query);
		 mysqli_num_rows($query_run);
         $row = mysqli_fetch_assoc($query_run);
         $filename_check = $row['img'];        

	if ($pro_img === $filename_check)
	{

		$_SESSION['status'] = "Product Image name is match with existing image, rename the image of upload different Image !";
			header('Location: product.php');
		
	}

	else
	{
		
		$query ="INSERT INTO `product` (category,name,img,price,stock) VALUES ('$category','$pro_name','$pro_img','$pro_price','$qty')";
		$query_run = mysqli_query($con,$query);


		if($query_run)
		{
		//echo "Saved";
			move_uploaded_file($tempname, $move);
			$_SESSION['success'] = "Product Added successfully ";
			header('Location: product.php');
		}
		else
		{
			$_SESSION['status'] = "Product Does Not Added successfully !!!";
			header('Location: product.php');
		}

	}

}

#-----------------------------------------------Product upload codes here-----------------------------------------------


if(isset($_POST['cus_delete_btn']))
{
	$id =$_POST['cus_delete_id'];

	$query = "DELETE FROM `product` WHERE id='$id';";
	$query_run = mysqli_query($con,$query);

	if ($query_run)
	{	 
		$_SESSION['success'] = "Product is Deleted ";
		header('Location: product.php');
 	}
 	else
 	{
 		$_SESSION['status'] = "Product is Not Deleted !!!";
		header('Location: product.php');
 	}
}



if(isset($_POST['logout_btn']))
{
	session_destroy();
	unset($_SESSION['username']);
}
?>


<?php 
                        if(isset($_POST['pro_update_btn']))
                          {
                              $filename = $_FILES ["upload"] ["name"];
                              $tempname = $_FILES ["upload"] ["tmp_name"];
                              $folder = "product/".$filename;

                              $id = $_POST['pro_edit_id'];
                              $pro_img = $folder;
                              $category = $_POST['category'];
                              $product_name = $_POST['edit_pro_name'];
                              $price = $_POST['pro_price'];
                              $qty = $_POST['qty'];

                              if($_FILES['upload']['name']=='')
							   {
                                  $query = "UPDATE `product` SET category='$category', name='$product_name', price='$price', stock='$qty' WHERE id='$id'";
                               }		
                               else
                               {					   

                              $query = "UPDATE `product` SET category='$category', name='$product_name', img='$pro_img', price='$price', stock='$qty' WHERE id='$id'";
                               }

                              $query_run = mysqli_query($con,$query);
                              if($query_run)
                              {
             
                                 move_uploaded_file($tempname, $folder);
                                 $_SESSION['success'] = "Product Updated Successfully";
                                 header('Location: product.php');
    
                              }
                              else
                              {
                                $_SESSION['status'] = "Product do not Updated !!!";
                                header('Location: product.php');
                              }
                          }




                if(isset($_POST['pro_delete_btn']))
                  {
                    $id =$_POST['pro_delete_id'];

                    $query = "DELETE FROM `product` WHERE id='$id'";
                    $query_run = mysqli_query($con,$query);

                    if ($query_run)
                    {  
                      $_SESSION['success'] = "Product is Deleted";
                      header('Location: product.php');
                    }
                    else
                    {
                      $_SESSION['status'] = "Product is Not Deleted !!!";
                      header('Location: product.php');
                    }                 
                  }


        ?>

<?php
	 
	 if(isset($_POST['user_del_btn']))
                  {
                    $id =$_POST['user_del_id'];
                    $cusname =$_POST['user_del_name'];

                    $query = "DELETE FROM `userinfo` WHERE userid='$id'";
                    $query_run = mysqli_query($con,$query);

                    if ($query_run)
                    {                       
                           
                           $_SESSION['success'] = "Customer '".$cusname."' is Deleted";
                           header('Location: customer.php');
                    }
                
                    else
                    {
                      $_SESSION['status'] = "Customer is Not Deleted !!!";
                      header('Location: customer.php');
                    }                 
                  }


?>