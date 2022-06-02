<?php

//error_reporting(0);

$con = mysqli_connect("localhost","root","") or die("Unable to connect");
/*$con = mysqli_connect("localhost","chotu1st","Dv@14111999","jks") or die("Unable to connect");*/
  mysqli_select_db($con,"jks");

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Bharat Sports | Admin Panel</title>

  <link rel="icon" href="webed.png" type="image/icon type">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style type="text/css">
    
     select{
       border: 1px solid gray;
       color: gray;
       padding-left: 5px;
       padding-right: 293px;
       padding-bottom: 6px;
       padding-top: 6px;
       border-radius: 4px;
       font-size: 15px;
       font-weight: bold;
       background-color: white;
    }
    .ad_dp{
              border-radius: 8px;        
    }
    .ad_dp_edit{
              border-radius: 8px;
              margin-bottom: 6px; 
              margin-right: 10%;       
    }
    .pro_img{
           border-radius: 6px;
        }
.fa-inr{
        margin-top: 26px;
        margin-right: 0
        font-size: 15px;
        color: green;
        
}
.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btns {
  border: 1px solid gray;
  color: gray;
  padding: 6px 179px;
  border-radius: 6px;
  font-size: 15px;
  font-weight: bold;
  background-color: white;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}

.upload-btn-wrapper_edit {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btns_edit {
  border: 1px solid black;
  color: gray;
  padding: 6px 30px;
  border-radius: 4px;
  font-size: 15px;
  font-weight: bold;
  background-color: white;
}

.upload-btn-wrapper_edit input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}

.fa-user-secret{
           font-size: 30px; 
           margin-top: 5px;
}

.fa-users{
            font-size: 30px;
            margin-top: 5px;
}

/*--------------------------product at admin panel css code here ----------------------------------*/

.category textarea{

  width: 95px;
  height: 40px;
  margin :0;  
  padding: 8px 10px;
  box-sizing: border-box;
  border: none;
  border-radius: 4px;
  background-color: transparent;
  font-size: 14px;
  resize: none;
  text-align:center;

}

.pro_name textarea{

  width: 240px;
  height: 100px;
  margin :0;
 
  margin-right: 0;
  margin-left: 5px;
  padding: 8px 10px;
  box-sizing: border-box;
  border: none;
  border-radius: 4px;
  background-color: transparent;
  font-size: 14px;
  resize: none;
  text-align:center;

}

.qty textarea{

  width: 55px;
  height: 40px;
  margin :0;
 
  padding: 8px 1px;
  box-sizing: border-box;
  border: none;
  border-radius: 4px;
  background-color: transparent;
  font-size: 14px;
  resize: none;
  text-align:center;


}

.pro_price textarea{

  width: 60px;
  height:40px;
  margin :0;  
  padding: 8px 1px;
  box-sizing: border-box;
  border: none;
  border-radius: 4px;
  background-color: transparent;
  font-size: 14px;
  resize: none;
  text-align:center;
}



.btns_editx {

  border-top:none;
  border-left: none;
  border-right: none;
  border-bottom: 1px dotted red;
  border-width: 1px;
  color: blue;
  z-index: 10;
  padding: 0px 34px;
  border-radius: 0;
  font-size: 12px;
  font-weight: bold;
  font-family: Stencil;
  background-image: linear-gradient(white,#f21111);
}

.xxx{
    display: block;
}

#cart{font-size: 32px; 
           margin-top: 5px;}

  </style>



</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">