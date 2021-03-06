<!DOCTYPE html>

<?php session_start() ?>;

<?php include "connect.php" ?>

<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Electronica</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modal.js"></script>
  
    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }
      .row{
        padding-top: 100px;
      }
      #cat1{
        float: left;
        border-radius: 100%;
        border: 3px solid black;
      }

      #cat2{
        float: right;
        border-radius: 100%;
        border: 3px solid black;
      }

      #cat3{
        float: center;
        padding-left: 50px;
        border-radius: 100%;
        border: 3px solid black;
      }
      #cat4{
        float: left;
        padding-left: 180px;
        border-radius: 100%;
        border: 3px solid black;

      }
      #cat5{
        float: right;
        padding-right: 180px;
        border-radius: 100%;
        border: 3px solid black;
      }

      
      #navbarResponsive2{
        padding-right: 300px;
      }
      
      .slideshow{
        margin-top: -50px;
        margin-left: 300px;
        width: 500px;
        height: 250px;
        border: 2 2 2 2 solid black;
      }
      .myslides{
        margin-left: 500px;
        width: 500px;
        height: 350px; 
      }
      #navbar2{
        float: bottom;
        margin-top: -30px;
      }
      .w3-display-container{
        width: 500px;
        height: 400px;

      }
      #description{
        height: 500px;
        width: 700px;
        border: 1 1 1 1 solid black;
      }
      .submit{

        height: 48px;
        float: right;
        color: #FFF;
        width: 70%;
        font-weight: 700;
        font-size: 16px;
        background: #4CAF50;
        margin-top: 7px;
        margin-left: 50px;
      }
      .infoslideshow{
        margin-top: 20px;
        background-color: rgba(255,255,255,0.8);
        height: 500px;
        width: 500px;
      }
      .button1 {
          margin-top: -20px;
          background-color: #00c378;
          box-shadow: 0 1px 4px #757575;
          border: none;
          width: 200px;
          height: 50px;
      }
      .button1:active {
        background-color: #0b9660;
        box-shadow: 0 1px 4px #757575;
      }

      .modal {
          display: none;
          position: fixed;
          z-index: 1;
          padding-top: 100px;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          overflow: auto;
          background-color: rgb(0, 0, 0);
          background-color: rgba(0, 0, 0, 0.4);
      }

      .modal-content {
          background-color: #fefefe;
          margin: auto;
          padding: 20px;
          border: 1px solid #888;
          width: 80%;
      }

      .close {
          color: #aaaaaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
      }

      .close:hover,
      .close:focus {
          background-color: red;
          color: #000;
          text-decoration: none;
          cursor: pointer;
      }
      #myBtn {
        padding-top: 4px;
        padding-right: 10px;
        display: inline-block;
        background-color: transparent;
        border: none;
        color: gray;
        text-align: center;
        font-size: 17px;
        width: 120px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 3px;
      }
      #myBtn .span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }
      #myBtn .span:after {
        position: absolute;
        opacity: 0;
        transition: 0.5s;
      }
      #myBtn:hover{color: white;}
      #myBtn:hover .span {
        padding-right: 25px;
        color: white;
      }
      #myBtn:hover .span:after {
        opacity: 1;
        right: 0;
        padding-top: -10px;
      }
      #hide-modal{
             display: inline-block;
              background-color: black;
              border: none;
              width: 20%;
              padding: 10px;
              cursor: pointer;
              font-size: 20px;
              color: white;
              border-radius: 3px;
      }
      
      #redirect-to-results{
             display: inline-block;
             background-color: black;
             border: none;
             width: 30%;
             padding: 10px;
             cursor: pointer;
             font-size: 20px;
             color: orange;
             margin-top: 25px;
             margin-bottom: 15px;
             border-radius: 3px;
           }
           .quit-modal-content{
               margin: 5% auto;
               width: 50%;
               height: 40%;
               background: rgba(0,0,0,0.9);
               border-radius: 4px;
           }
    </style>

  </head>

  <body background="try.jpg">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
      <div class="container">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="myorders.php">My Orders</a>
            </li>
            
            
            <li class="nav-item">
              <button class="button" onclick="dispmodal()" id="myBtn">LogOut<span class="glyphicon glyphicon-log-out span"></span></button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark " id="navbar2">
      <div class="container">
        <a class="navbar-brand" href="menu.php">Categories</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive2">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="smartphones.php">Smartphones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="laptops.php" style="padding-left: 30px;">Laptop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="washingmachines.php" style="padding-left: 30px;">Washing Machine</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="refrigerators.php" style="padding-left: 30px;">Refrigerator</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="televisions.php" style="padding-left: 30px;">Television</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row content">
        <div class="col-lg-12 " >
          <div id="myModal" class="modal">
              <div align="center" class="quit-modal-content fadeInRight">
                          <header class="container" id="modal-head">
                              <h2 style="background-color: rgba(0,0,0,0.4); color: white;">Are You Sure?</h2></header>
                          <button id="redirect-to-results" onclick="location.href='logout.php';" style="color:white; background:rgba(0,0,0,0.4)">Proceed To LogOut</button>
                          <button id="hide-modal" onclick="hidemodal()" >Go Back</button>
                </div>
                <script>
                  var modal = document.getElementById('myModal');

                  var btn = document.getElementById("myBtn");

                  var span = document.getElementsByClassName("close")[0];

                  btn.onclick = function() {
                      modal.style.display = "block";
                  }

                  span.onclick = function() {
                      modal.style.display = "none";
                  }

                  window.onclick = function(event) {
                      if (event.target == modal) {
                          modal.style.display = "none";
                      }
                  }
                </script>
          </div>
          <?php $imgsrc = $_GET['imgsrc']; $cat_id = $_SESSION['cat_id']; ?>
          <div >
            <div class="slideshow" >
               <div class="w3-content w3-display-container">
               <div class="infoslideshow">
                
                <img id="f" onload="fifo()" src="<?php echo $imgsrc; ?>"  style="padding-top: 90px;padding-left: 120px;">
                <script>
                  var b= "<?php echo $cat_id; ?>";
                  //console.log("B :"+b);
                  //document.write(b);
                  function fifo() {
                         if(b==1){        //width:65%;height:83%;
                              document.getElementById('f').style.height = 450+'px';
                              document.getElementById('f').style.width = 380+'px';
                             
                            }
                         else if (b==2)   //width:83%;height:60%;
                            {
                           document.getElementById('f').style.height = 250+'px';
                              document.getElementById('f').style.width = 400+'px';
                            
                          }
                          else if (b==3)  //width:68%;height:83%;
                            {
                           document.getElementById('f').style.height = 450+'px';
                              document.getElementById('f').style.width = 380+'px';
                          }
                          else if (b==4)  //width:68%;height:92%;
                            {
                           document.getElementById('f').style.height = 450+'px';
                              document.getElementById('f').style.width = 380+'px';
                          }
                          else            //width:80%;height:60%;
                            {
                           document.getElementById('f').style.height = 270+'px';
                              document.getElementById('f').style.width = 400+'px';
                          }
                     }
                </script>
                </div>

              </div>
              <div id="description" class="col-md-6">
              <p > 
              <?php  
                  
                  $row_id = $_GET['link'];
                  $price = $_SESSION['price'] = $_GET['price']; 
                  echo "$row_id"; 
                 // $stmt = $db->prepare("SELECT * FROM product where prod_id = :pid;");
                  //$stmt->bindParam(':pid', );


               ?> 
              </p>         
              </div>
              <div class="col-md-6" style="margin-left: 70px;">
                <button class="submit" name="create_acc" type="submit" style="margin-left: 50px;" onclick="window.location.href='buy.php'"> Buy Now
              </button>
              </div>
              <script>
              var slideIndex = 1;
              showDivs(slideIndex);

              function plusDivs(n) {
                showDivs(slideIndex += n);
              }

              function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                if (n > x.length) {slideIndex = 1}    
                if (n < 1) {slideIndex = x.length}
                for (i = 0; i < x.length; i++) {
                   x[i].style.display = "none";  
                }
                x[slideIndex-1].style.display = "block";  
              }
              </script> 
            </div>
          </div>          
           
        </div>
      </div>
    </div>

    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div align="center" class="quit-modal-content fadeInRight">
            <header class="container" id="modal-head">
                <h2 style="background:rgba(0,0,0,0.4)">Are You Sure?</h2></header>
            <button id="redirect-to-results" onclick="location.href='login.html';" style="color:white; background:rgba(0,0,0,0.4)">Proceed To LogOut</button>
            <button id="hide-modal" onclick="hidemodal()" style="color:white">Go Back</button>
        </div>

    </div>
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>


<?php

  $id = $_SESSION['varname'];
  echo $id;
  $row_id = $_GET['link'];
  echo $row_id;
?>