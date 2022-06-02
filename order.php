<?php
  /*$con = mysqli_connect("localhost","root","") or die("Unable to connect");
  mysqli_select_db($con,"bharatsports");*/
  
  include('include/connection.php');
  session_start();
  error_reporting(0);  
  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
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

  <div class="shopping-cart">

    <?php
        $userid = $_SESSION['userid'];
        $query = "SELECT * FROM carts INNER JOIN product ON carts.user_id = product.id WHERE user_id = '$userid'";
        /*$query = "SELECT * FROM `order` WHERE user_id ='$userid' ";*/
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
    ?>      
      <!-- Title -->
      <div class="title">
        Order
      </div>

      <table class="tbl_head_order">
        <thead>
          <td>Product Image</td>
          <td>Product Name</td>
          <td>Cost of Each</td>
          <td>Qty</td>
          <td>Total</td>
        </thead>

        <?php
          while($row = mysqli_fetch_array($result))
          {
        ?> 
        <tbody>
          <tr class="img"><img src="<?php echo $row["img"]; ?>"></tr>
          <tr><?php echo $row["name"]; ?></tr>
          <tr><?php echo $row["price"]; ?></tr>
          <tr><?php echo $row["qty"]; ?></tr>
          <tr><?php echo $row["price"]*$row["qty"]; ?></tr>
        </tbody>
       <?php
          }
               
        }
  
         else
             {
                   echo '<h1 class="noitem">"No orders "</h1>';
             }
        
      ?>      
     
      </table>     



</div>

    
</body>
</html>

