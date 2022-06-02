<?php
            $con = mysqli_connect("localhost","root","") or die("Unable to connect");
                   mysqli_select_db($con,"bharatsports");
                   session_start();

                $product_id=$_POST['like_pro_id'];
                $userid=$_POST['userid'];
                               

                $sql = "SELECT FROM `likes` WHERE userid='$userid' AND like_pro_id='$product_id'";
                
                if (mysqli_query($con, $sql)) 
                {
                    $sql = "DELETE FROM `likes` WHERE userid='$userid' AND like_pro_id='$product_id'";
                    mysqli_query($con, $sql);
                    echo json_encode(array("statusCode"=>200));
                }
                else
                {
                    
                       echo json_encode(array("statusCode"=>201));
                
                }

                
            

                mysqli_close($con);  
?>