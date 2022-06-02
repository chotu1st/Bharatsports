

<?php 
    // $con = mysqli_connect("localhost","root","") or die("Unable to connect");
    //       mysqli_select_db($con,"bharatsports");
    include('include/connection.php');
           session_start();   
            
            if (isset($_POST['login'])) 
                {
                    //echo ' <script type="text/javascript"> alert("hello javascript") </script> ';
                    $email = $_POST['username'];
                    $password = $_POST['password'];

                        //SQL Query

                        $query = "SELECT * FROM `userinfo` WHERE email='$email' AND password='$password'";
                        $query_run = mysqli_query($con,$query);

                        if(mysqli_num_rows($query_run)>0)
                        {
                            //user exist
                            
                            $query = "SELECT * FROM `userinfo` WHERE email='$email'";
                            $query_run = mysqli_query($con,$query);
                              if(mysqli_num_rows($query_run) > 0)
                                {
                                  $row = mysqli_fetch_assoc($query_run);
                                  $_SESSION['customer']=$email;
                                  $_SESSION['dp']= $row['dp'];
                                  $_SESSION['customer_name']= $row['name'];
                                  $_SESSION['address']= $row['address'];
                                  $_SESSION['contact']= $row['contact'];
                                  $_SESSION['userid']= $row['userid'];
                                  

                                  header('Location: index.php');
                                }
                             else
                             {
                                //  header('Location: login.php');
                                  echo ' <script type="text/javascript"> alert("Error in fetching data") </script> ';
                                  header('Location: login.php');
                             }                           
                            
                        }
                        else
                        {
                            
                              //password id wrong
                                header('Location: login.php');
                            
                        } 

                }    

         
 ?>

 <?php 
                if (isset($_POST['addcart'])) 
                {
                    //echo ' <script type="text/javascript"> alert("hello javascript") </script> ';
                                    
                    $product_id = $_POST['product_id'];
                    $userid = $_POST['userid'];
                    $qty= 1;
                   

                        //SQL Query

                       $query = "SELECT * FROM `carts` WHERE userid ='$userid' AND product_id='$product_id'";
                       $query_run = mysqli_query($con,$query);

                        if(mysqli_num_rows($query_run)>0)
                        {
                            //product added before
                            
                            $_SESSION['alert']="Product already Added !!!";
                            header('Location: index.php');
                        }
                        else
                        {
                            $query = "INSERT INTO `carts`(`userid`, `product_id`, `qty`) VALUES ('$userid','$product_id','$qty')";
                            $query_run = mysqli_query($con,$query);
                            if($query_run)
                            {
                                $_SESSION['alert']="Product Added Successfully!!!";                        
                                header('Location: index.php');

                             }                            
                            else
                            {
                               $_SESSION['alert']="Problem occur try again later... ";
                               header('Location: index.php');
                            }
                        }
                } 
         ?>


    <?php 
                if (isset($_POST['s_btn'])) 
                {
                    //echo ' <script type="text/javascript"> alert("hello javascript") </script> ';

                    

                    if ($_FILES['upload']['size'] == 0 )
                    {                      
                      $dp ="user dp/default_dp.png";
                    }
                    else
                    {
                      $filename = $_FILES ["upload"] ["name"];
                      $tempname = $_FILES ["upload"] ["tmp_name"];
                      $folder = "user dp/".$filename;
                      $dp = $folder;
                    }

                   
                    $name = $_POST['full_name'];
                    $address = $_POST['place'];
                    $contact = $_POST['contact'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                        //SQL Query

                        $query = "SELECT * FROM `userinfo` WHERE email ='$email'";
                        $query_run = mysqli_query($con,$query);

                        if(mysqli_num_rows($query_run)>0)
                        {
                            //user exist
                            echo ' <script type="text/javascript"> alert("User already exists.!!! try another...") </script> ';
                        }
                        else
                        {
                            $query = "INSERT INTO `userinfo` VALUES(' ','$dp','$name','$address','$contact','$email','$password')";
                            $query_run = mysqli_query($con,$query);
                            if($query_run)
                            {
                                //USer Registered
                                move_uploaded_file($tempname, $folder);
                                $_SESSION['newuser']=$email;                           
                                header('Location: login.php');

                                                        } 
                            else
                            {
                                echo ' <script type="text/javascript"> alert("Something Went Wrong !") </script> ';
                            }
                        }

                } 
         ?>

      

         