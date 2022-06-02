<?php
            include('include/connection.php');
                   session_start();

                $product_id=$_POST['like_pro_id'];
                $userid=$_POST['userid'];
                $like="like-btn is-active";
               

                $sql = "SELECT FROM `likes` WHERE userid='$userid' AND like_pro_id='$product_id'";
                $result =mysqli_query($con, $sql);
                if (mysqli_num_rows($result)>0) 
                {
                    $sql = "DELETE FROM `likes` WHERE userid='$userid' AND like_pro_id='$product_id'";
                    $result =mysqli_query($con, $sql);
                    if (mysqli_num_rows($result)>0) 
                    {
                    echo json_encode(array("statusCode"=>200));
                    }
                    else 
                    {
                       echo json_encode(array("statusCode"=>201));
                    }
                }
                else
                {
                    
                    $sql = "INSERT INTO `likes`( `userid`, `like_pro_id`, `like_status`) 
                    VALUES ('$userid','$product_id','$like')";

                    if (mysqli_query($con, $sql)) 
                    {
                      echo json_encode(array("statusCode"=>200));
                    } 
                     else 
                    {
                       echo json_encode(array("statusCode"=>201));
                    }
                }

                
            

                mysqli_close($con);  
?>