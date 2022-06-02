<?php
/*  $con = mysqli_connect("localhost","root","") or die("Unable to connect");
  mysqli_select_db($con,"bharatsports");*/
  
  include('include/connection.php');
  session_start();
  error_reporting(0);
  
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Cart</title>
      <!-- Font Awesome - -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
    <link rel="icon" href="logo/webs.png" type="image/icon type">
    <script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>
    <meta name="robots" content="noindex,follow" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>

  <?php
        $userid = $_SESSION['userid'];
        /*$query = "SELECT * FROM ((carts INNER JOIN likes ON carts.userid = likes.userid)
                  INNER JOIN product ON carts.product_id = product.id) ";*/

        $query = "SELECT * FROM carts JOIN product ON carts.product_id = product.id WHERE user_id ='$userid' ";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
       
       <div class="shopping-cart">
      <!-- Title -->
      <div class="title">
        Shopping Bag
      </div>
      
      <form method="POST">
      <!-- Product #1 -->
      <div class="item">
        <div class="buttons">
          <input type="submit" name="remove" class="delete-btn" value="">
          <!-- <button type="submit" name="remove"> <span ></span></button> --> 
       </div>


        <div class="image">
          <img src="<?php echo $row["img"]; ?>"  alt=""  />
        </div>

        <div class="description">
          <span><?php echo $row["name"]; ?></span>
        </div>

        <div class="quantity">
          <button class="plus-btn" type="button" name="button">
            <img src="plus.svg" alt="" />
          </button>
          <input type="text" name="order_qty" value="<?php echo $row["qty"];  ?>">
          <button class="minus-btn" type="button" name="button">
            <img src="minus.svg" alt="" />
          </button>
         </div>

         <div class="total-price" id="total"><i class="fa fa-rupee-sign" aria-hidden="true"></i>
         <input class="input-price" type="text" name="price" value="<?php echo $row["price"]; ?>">
        </div> 
        
            <input type="hidden" name="productid" value="<?php echo $row["id"]; ?>">
            <input type="submit" class="order" name="order" value="Check out">

        </form>
        
        
      </div>
</div>      

<?php
          }
        }

        if(mysqli_num_rows($result) === 0)
        {
              echo '<h1 class="noitem">"No Item in the Cart"</h1>';
        }
      ?>

<script type="text/javascript">
      $('.minus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());      

    		if (value > 1) {
    			value = value - 1;
          
    		} else {
    			value = 0;
    		}

        $input.val(value);

    	});

    	$('.plus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());
        

    		if (value < 10000) {
      		value = value + 1;          
    		} else {
    			value =100;
    		}

    		$input.val(value);
    	});

       
    </script>

    
</body>
</html>
 <?php


        if(isset ($_POST['order']))
        {
          $user_id = $_SESSION['userid'];
          $orderqty = $_POST['order_qty'];
          $price = $_POST['price'];
          $productid = $_POST['productid'];
          $status = "Order Placed";

          $query ="INSERT INTO `order` (productid,order_qty,total_price,user_id,status) VALUES ('$productid','$orderqty','$price','$user_id','$status')";
          $query_run = mysqli_query($con,$query);

           if($query_run)
           {
           //echo "Saved";
              {
                             echo '<script> alert("Ordered Placed Successfully") </script>';
              }
              
          }
              else
              {
                echo '<script> alert("Errro ") </script>';
              }
        }



      if(isset ($_POST['remove']))
        {

          $user_id = $_SESSION['userid'];
          $productid = $_POST['productid'];     

          $query ="DELETE FROM `carts` WHERE userid = '$user_id' AND product_id = '$productid'";
          $query_run = mysqli_query($con,$query);

           if($query_run)
           {
             //alert msg of remove product "-(_-"
               echo '<script> alert("Product Remove from Cart") </script>';              
           }         

           else
           {
               echo '<script> alert("Some Errro ") </script>';
           }

        }

  ?>
