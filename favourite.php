<?php
 include('include/connection.php');
 include('include/header.php');
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Liked Item</title>
	<style type="text/css">
		body{
			background-color: skyblue;
			padding: 50px 50px;
		}
        h1{
        	text-align: center; 
        	color: #fff;
            letter-spacing: 6px;
            text-shadow: 2px 2px red;
        }
	</style>
</head>
<body>

<h1> L i k e d   &nbsp;&nbsp;P r o d u c t </h1>

<table >
        <thead>
          <td>Product Image</td>
          <td>Product Name</td>
          <td>Price</td>
          <td>Liked item</td>
          <td>Add Cart</td>
        </thead>

  <?php
        $userid = $_SESSION['userid'];
        /*$query = "SELECT * FROM ((carts INNER JOIN likes ON carts.userid = likes.userid)
                  INNER JOIN product ON carts.product_id = product.id) ";*/

        $query = "SELECT * FROM `likes` INNER JOIN `product` ON likes.like_pro_id=product.id WHERE user_id ='$userid' ";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
        <tbody>
          <tr><img src="<?php echo $row["img"]; ?>"></tr>
          <tr><?php echo $row["name"]; ?></tr>
          <tr><?php echo $row["price"]; ?></tr>
          <tr><?php echo $row["like_status"]; ?></tr>
          <tr><?php echo $row["price"]*$row["qty"]; ?></tr>
        </tbody>
       
      
          
     
      </table>
      
          
        
      
     

<?php
          }
               
        }
if(mysqli_num_rows($result) === 0)
             {
                   echo '<h1 class="noitem">"No orders "</h1>';
             }
        
      ?>

</body>
</html>