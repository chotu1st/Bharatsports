
<!----------------------------------------wallpaper slide--------------------------------------->
<!-- <div class="Welcome">
  <h1><span style="color: orange">Welcome to </span> <span ><?php echo $customer_name; ?></span>  <span style="color: green">Bharat Sports</span></h1>
</div> -->


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 6</div>
  <img src="bg/c.jpg" style="width:100%">
  <div class="text">Cricket</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 6</div>
  <img src="bg/f.jpg" style="width:100%">
  <div class="text">Football</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
  <img src="bg/h.jpg" style="width:100%">
  <div class="text">Hockey</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <img src="bg/K1.jpg" style="width:100%">
  <div class="text">Karate</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 6</div>
  <img src="bg/g.jpg" style="width:100%">
  <div class="text">Gym</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <img src="bg/as.jpg" style="width:100%">
  <div class="text">All Commom Sports</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
</div>

<!----------------------------------------------wallpaper slide end--------------------------------->
<div class="bodi">
<input type="hidden"  id="userid" value="<?php echo $userid; ?>" >

<?php
$alert = $_SESSION['alert'];
            if($_SESSION['alert'])
            {
                echo ' <script type="text/javascript"> alert("'.$alert.'") </script> ';
                
            }
            unset($_SESSION['alert']);

?>            


<!---------------------------------------Cricket Start Here ------------------------------------------->

<div class="heading">
  <div class="heading1">
    <h2><span>☆</span> Cricket <span>☆</span></h2>

  </div>
</div>
       
<!-- Swiper -->
  <div class="swiper-container" id="c1">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='cdress'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">   
               
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"];  ?>" > </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>



   <!-- Swiper -->
  <div class="swiper-container" id="c2">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='cbag'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>


   <!-- Swiper -->
  <div class="swiper-container" id="c3">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='cball'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>


   <!-- Swiper -->
  <div class="swiper-container" id="c4">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='cbat'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>


   <!-- Swiper -->
  <div class="swiper-container" id="c5">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='cshoes'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">   

                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

<!---------------------------------------Cricket Close Here ------------------------------------------->


<!---------------------------------------Football Start Here ------------------------------------------->

<div class="heading">
  <div class="heading1">
    <h2><span>☆</span> Football <span>☆</span></h2>
  </div>
</div>
  <!-- Swiper -->
  <div class="swiper-container" id="f1">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='fball'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>



 <!-- Swiper -->
  <div class="swiper-container" id="f2">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='fdress'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>



   <!-- Swiper -->
  <div class="swiper-container" id="f3"> 

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='fshoes'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div> 



  <!-- Swiper -->
  <div class="swiper-container" id="f4">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='fitem'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div> 

<!---------------------------------------Football Close Here ------------------------------------------->

<!---------------------------------------Hockey Start Here --------------------------------------------->

<div class="heading">
  <div class="heading1">
    <h2><span>☆</span> Hockey <span>☆</span></h2>
  </div>
</div>

  <!-- Swiper -->
  <div class="swiper-container" id="h1">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='hdress'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div> 


  <!-- Swiper -->
  <div class="swiper-container" id="h2">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='hstick'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>


   <!-- Swiper -->
  <div class="swiper-container" id="h3">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='hball'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>


   <!-- Swiper -->
  <div class="swiper-container" id="h4">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='hshoes'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div> 

<!--------------------------------------------Hockey Close Here ------------------------------------------->

<!--------------------------------------------Karate Start Here ------------------------------------------->

<div class="heading">
  <div class="heading1">
    <h2><span>☆</span> Karate <span>☆</span></h2>
  </div>
</div>

  <!-- Swiper -->
  <div class="swiper-container" id="k1">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='kdress'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div> 


  <!-- Swiper -->
  <div class="swiper-container" id="k2">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='kgloves'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div> 


  <!-- Swiper -->
  <div class="swiper-container" id="k3">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='kkickpad'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <div class="slider">

              <div class="left">
                    <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
                    <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                             
              </div>

              <div class="right">                                
                        <span class="like-btn" ></span>

                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </div>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div> 


  <!-- Swiper -->
  <div class="swiper-container" id="k4">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='kpbag'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div> 
<!---------------------------------------------Karate Close Here ------------------------------------------->

<!-----------------------------------------------Gym Start Here ------------------------------------------->

<div class="heading">
  <div class="heading1">
    <h2><span>☆</span> Gym <span>☆</span></h2>
  </div>
</div>

  <!-- Swiper -->
  <div class="swiper-container" id="g1">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='homegym'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div> 


  <!-- Swiper -->
  <div class="swiper-container" id="g2">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='hsup'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div> 


  <!-- Swiper -->
  <div class="swiper-container" id="g3">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='gdress'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div> 


  <!-- Swiper -->
  <div class="swiper-container">

    <div class="swiper-wrapper" id="g4">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='gitem'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div> 

  <!-----------------------------------------------Gym Close Here ------------------------------------------->

<!-----------------------------------------------All Sports Start Here ------------------------------------------->

<div class="heading">
  <div class="heading1">
    <h2><span>☆</span> All Sports <span>☆</span></h2>
  </div>
</div>

  <!-- Swiper -->
  <div class="swiper-container" id="s1">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='stshirt'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div> 


  <!-- Swiper -->
  <div class="swiper-container" id="s2">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='slower'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div> 


  <!-- Swiper -->
  <div class="swiper-container" id="s3">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='tracksuit'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div> 


  <!-- Swiper -->
  <div class="swiper-container" id="s4">

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='sshoes'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
    </div>
   
        <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div> 

  <!-----------------------------------------------All Sports Close Here ------------------------------------------->

  <!-----------------------------------------------Other sport Start Here ------------------------------------------->
<?php
  $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='other'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) == 0)
        {
?>          
          <style type="text/css"> .other_pro{display: none;}</style>        }
<?php 
        }
?>

<div class="other_pro"> 
<div class="heading">
  <div class="heading1">
    <h2><span>☆</span> Other Items <span>☆</span></h2>
  </div>
</div>

  <!-- Swiper -->
  <div class="swiper-container" >

    <div class="swiper-wrapper">
<?php
        $query = "SELECT * FROM product LEFT JOIN likes ON product.id=likes.like_pro_id 
 WHERE category='other'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?> 
      <div class="swiper-slide">

        <form  class="slider" method="POST" action="php_code.php" >

              <div class="left">
         <button class="addcart" name="addcart" type="submit"><span class="fa fa-shopping-basket" aria-hidden="true"></span></button>
         <input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" >                      
              </div>
              
              <div class="right">                                
                        <span class="<?php echo ($row["like_status"] == "like-btn is-active")?$row["like_status"]:"like-btn"; ?>" id="<?php echo $row["id"]; ?>"> </span>    
                          
                    <input type="hidden" name="product_id"  id="product_id" value="<?php echo $row["id"]; ?>" >                 
                        <div class="rating">
                               <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>

                        </div>
             </div>

              <div class="image">
                <img src="<?php echo $row["img"]; ?>"/>    
              </div>
              <div class="price"><h3><i class="fa fa-rupee-sign" aria-hidden="true"></i> <?php echo $row["price"]; ?></h3></div>

              <div class="name"><p><?php echo $row["name"]; ?></p></div>
       </form>

       </div>
       <?php
          }
        }
      ?>
      
     </div>
   
        <!-- Add Pagination -->
     <div class="swiper-pagination"></div>
   </div>
</div>


