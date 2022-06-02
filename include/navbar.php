<?php	   
	   $email =  $_SESSION['customer'];
       if(isset($_SESSION['customer']) && $_SESSION['customer'] !='') 
        {                       
           
             $dp = $_SESSION['dp'];
             $customer_name = $_SESSION['customer_name'];                        
             $address = $_SESSION['address'];
             $contact = $_SESSION['contact'];
             $userid = $_SESSION['userid'];
             $productid = $_SESSION['product_id'];
             $like_status = $_SESSION['like_status'];
             $likeid = $_SESSION['like_id']= $row['id'];  
         
?>
        <style type="text/css">
    	  
    	  .left{display: block;}
    	  .right{display: block;}    	

        </style>

<?php
         }    

?>

<div class="top-nav-bar">
		<div class="leftitem">
			<img src="logo/slogo.png" class="logo" ><br>

		</div>
		<div class="btns">
		
		 
		<button name="order"><a href="order.php" target="_blank"><i class="fa fa-shopping-bag" aria-hidden="true"></i>My order</a></button>
		 <button name="cart"><a href="cart.php" target="_blank" ><i class="fa fa-shopping-basket" aria-hidden="true"></i>Cart</a></button>
		 
		 	
<?php
		 	if(!$_SESSION['customer'])
		 	{
		 			
		 	   echo '<button name="login"> <a href="login.php" ><i class="fa fa-user-circle" aria-hidden="true"></i>Login</a> </button>';
		 	   echo  '<button class="admin"> <a href="admin/index.php" target="_blank" style="color:red;"><i class="fa fa-user-secret" aria-hidden="true"></i>Admin Login</a> </button>';
		 	   echo'</div>';
		    }
		    elseif($_SESSION['customer'])
		    {
?>
				
			</div>	
		    <div id="dropdown">		    	
               <button id="circle" name="logout"><?php echo $customer_name; ?> <img  src="<?php echo $dp; ?>" class="cus_dp"></button>
		    	<div id="dropdown-content">
                    <a style="color: blue; font-weight: bold;border-bottom-left-radius: 10px;" href="#">Profile</a>
                    <a style="color: green; font-weight: bold;" href="#">Liked</a>
                    <form method="Post" action="logout.php">
                    <a style="border-top-right-radius: 10px;" ><input style="color: red; font-weight: bold; background: transparent;border:none;outline: none;" type="submit" name="logout" value="Logout"></a>                  
                </div>
            </div>
            <style type="text/css"> .admin{display: none;}</style>

<?php		   	
		    }
?>	 	
			
		</div>
