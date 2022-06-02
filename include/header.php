<?php
   include('include/connection.php');
   session_start();
   error_reporting(0);
  ?>
<!DOCTYPE html>

<html>

<head>
  
  <title>BharatSports Online Shop</title>

  <meta charset="utf-8">

  <!-- Font Awesome - -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">

<link rel="icon" href="logo/webs.png" type="image/icon type">

  <link rel="stylesheet" type="text/css" href="css/magic.css">

  <link rel="stylesheet" type="text/css" href="css/wall.css">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

   <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->

 
   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->

    <script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>

    <meta name="robots" content="noindex,follow" />

     <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="css/swiper.min.css">



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



  <!-- Demo styles -->
  <style>
    html{scroll-behavior: smooth;}
  body{background: #000;
        margin :0;
        padding:0;}

  /* -----------------------------------------------------------*/ 
    .slider{
        width: 86%;
        height: 99%;
        padding: 16px;
        margin: 4px;
        margin-top: 5px;
        background: #322F33;
        border-top: 1px solid #27EC24;
        border-bottom: 1px solid #27EC24;       
        border-left: 1px solid #fff;
        border-right: 1px solid #fff;
        border-radius: 1px;

          }

    .right{
      width: 36px;
      height: 50%;
        float: right;
        margin-right: -5%;
        margin-top: 3%;
        display: none;
         z-index: 11;
         position: relative;
    }      

.left{
        display: none;
        width: 36px;
        height: 60%;
        float: left;

       margin-left: -4.6%;
        margin-top: 15px;        
        z-index: 11;
        position: relative;
        
}
.left .fa-shopping-basket{
  margin-top: 20%;
  font-size: 22px;
  color: #248BEC;
  cursor: pointer;
}
    .image{
          margin-left: 12%;
          margin-top: -5%;
          width: 75% ;
          height: 85%;
          border: 1px solid #fff;   
          border-radius: 10px;       
          z-index: 10;
          background: #fff;
          margin-bottom: 0px;
        }
    .image img{
                height: auto;
                max-width: 96%;
                max-height: 96%;
                width: auto;
                
    }    
    .price{
        margin-top: 2%;
        margin-bottom: 4px;       
       
    }   

    .price h3{
      font-size: 18px;
      color : green;
      bottom: 0;
      line-height: 0;
    }
   
    .name{
        width: 100%;
        margin-top: -2%;
        line-height: 14px;
        align-items: center;
        text-align: center;
       
  
        
      }

    .name p{
                     
            color: #ECE924;
            font-size: 12px;
            margin-top: 0;
            align-items: center;
            padding-bottom: 0;
            margin-bottom: 0;

    }


/* Buttons -   Like */

.like-btn {
  margin-left: -110%;
  margin-top: -56%;
  position: absolute;
  display: inline-block;
  background: url('twitter-heart.png');
  width: 80px;
  height: 80px;
  background-size: 2900%;
  border:none;
  text-decoration: none;
  background-repeat: no-repeat;
  cursor: pointer;
  z-index: 11;
}
.like-btn:hover{ transform: scale(1.2); transition: ease 0.8s;}


.is-active {
  animation-name: animate;
  animation-duration: 0.8s;
  animation-iteration-count: 1;
  animation-timing-function: steps(28);
  animation-fill-mode: forwards;
}

@keyframes animate {
  0%   { background-position: left;  }
  50%  { background-position: right; }
  100% { background-position: right; }
}

 .rating {
  unicode-bidi: bidi-override;
  direction: rtl;
  margin-top: 140%;
  z-index :12;
}
.rating > span {
  display: inline-block;
  line-height: 12px;
  position: relative;
  width: 1.2em;
  font-size: 22px;
  color: orange;
}
.rating > span:hover:before,
.rating > span:hover ~ span:before {
   content: "\2605";
   position: absolute;
}




/* ---------------------------------------------------------------------------*/  

    html, .bodi {
      position: relative;
      height: 560px;
      
    }
    .bodi {

      background: black;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
     margin: 0;
      padding: 5px;
      margin-top: 3.5%;

    }
    .swiper-container {
      width: 100%;
      height: 100%;
      margin-left: auto;
      margin-right: auto;

    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #000;
      height: calc((100% - 20px) / 2);

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;


    }
    
/*--------------------------heading css  -----------------------*/
.heading{
          height: auto;
          width: 80%;
          margin-left: 10%;
          background-color: transparent;
          margin-bottom: 10px;
          border-width:5px;  
          padding: 5px;
          margin-top: 20px; 
   
    border-radius: 60px;
}
.heading1{
  border-style:dotted solid;
    border-color: white;
    border-radius: 60px;
    
    
}

@-webkit-keyframes blinker {
  from {opacity: 1.0;color: white;}
  to {opacity: 0.0;color: red;}
}

.heading h2{
              padding-top: 0px;
              padding-bottom: 0px;
              color: white;
              text-align: center;
              font-size: 24px;
              margin-bottom: 0;
              margin-top: 0;
              text-decoration: blink;
             -webkit-animation-name: blinker;
             -webkit-animation-duration: 0.5s;
             -webkit-animation-iteration-count:infinite;
             -webkit-animation-timing-function:ease-in-out;
             -webkit-animation-direction: alternate;
}

.menu{
            display: inline-flex;
            position: fixed;
            width: 74%;
            margin-left:12%;
            background-color: #3498DB;
            border-radius: 30px;
            top: 52px;
            z-index: 12;

     }
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 5px;
  font-size: 18px; 
  border: none;
  margin-left: 24%;
  width: 155px;
}
.dropbtn a {text-decoration: none;color: white;}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  margin-left: 24%;
  background-color: #f1f1f1;
  min-width: 155px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 15;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #2e80b8;}


/*-----------------------------------------top button ---------------------*/
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 90;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: transparent;
  color: white;
  cursor: pointer;
  padding: 10px;
  border-radius: 4px;
}
.fa-tree{
  color: red;
  font-size: 30px;
  margin-bottom: 0;
}
#myBtn:hover {
  background-color: #555;
}
.welcome {text-align: center; margin-top: 5%; z-index: 50;}
.Welcome h1{
    color: #FFF;
    font-family: Old English Text MT;    
   }

.left button{background: transparent;border: none;outline: none;}

/*-----------------------------------------top button ---------------------*/

.cus_dp{
       border: 1px solid silver;
       border-radius: 50%;
       cursor: pointer;
       width: 38px;
       height: 38px;
       margin-top: -3%;
       background-color: #fff ;
}

#circle{
        border: none;
        background: transparent;
        width: all;
        padding-left:12px;
        padding-right: 6px;
        height: 30px;
        outline: none;
        margin-top: 0;
        z-index: 50;       
        color: silver;
        font-weight:bold;
        font-size: 16px;
        font-style: italic;

}
#circle:hover img{ border: 1px solid white; }

#dropdown {
  position: fixed;
  display: inline-block;
  margin-left:6%;
  margin-top: 8px;
  
   margin-right: 0;
   z-index: 220;
}
#dropdown button:hover {color:white;}
#dropdown-content {
  display: none;
  position: absolute;  
  background-color: #f1f1f1;
  min-width: 186px;
 margin-top: 4px;
 margin-left: 32px; 
 border-bottom-left-radius: 10px;
 border-top-right-radius: 10px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  
}
#dropdown-content a {
  color: black;

  padding: 12px 10px;
  float: left;
  font-size: 12px;
  text-decoration: none;
  display: block;

}

#dropdown-content a:hover {background-color: #ddd;}

#dropdown:hover #dropdown-content {display: block;}

#dropdown:hover #dropbtn {background-color: #2e80b8;}


.fa-rupee-sign{
  font-size: 17px;
  }

  #userid{display: none;}

  </style> 


</head>

<body>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-tree" aria-hidden="true"></i><br>Top</button>

