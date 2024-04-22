<!doctype html>
<?php

include("dbconnect.php");

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link href="https://fonts.googleapis.com/css?family=BenchNine|El+Messiri|Lobster|Lobster+Two|Merienda|Dosis|Neucha|Charm" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
            
    
    <title>Tri Trip</title>
  </head>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/p4.jpg" class="d-block w-100 image" alt="NO IMAGE">
      <div class="carousel-caption d-none d-md-block">
        <h5 align="center">EUROPE</h5>
        </p>is a fairy-tale castel</p>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Countries and Cities</button>
          <ul class=" dropdown-menu">
              <?php
                $eid=0;
                if(isset($_REQUEST['eid']) && $_GET['eid']!=""){
                $eid=$_GET['eid'];
                }
              ?>
              <?php
                $qry = "SELECT id,title FROM events WHERE status = 1";
                $result = $con->query($qry);
                if($result->num_rows > 0){
	               while($row = $result->fetch_assoc()){
                $li = '<li class="list-group-item ';
                if($eid==$row['id']){
                    $li = $li.'active';
                }
                $li = $li.'"><a class="dropdown-item" href="inner1.php?eid='.$row['id'].'">'.$row['title'].'</a></li>';
                echo $li;
                }
                }        
                ?>
            </ul>
        </div>
      </div>
    </div>
    
   </div> 
     
  </div>



  <div>
    <h1 align="center" class="wlm">Welcome To Europe</br><hr></h1>
  </div>
  <div>
    <h2 class="wlm1">There simply is no way to tour Europe and not be awestruck by its natural beauty, epic history and dazzling artistic and culinary diversity.</h2>
  </div>




<div id="contact">
    <div>
        <h3 class="ft" align="center">Connect With Us</h3>
    </div>
    <div class="ft1">
        <div class="ft3"><h4>Email Us</h4><h6>rajvijodhani@gmail.com</h6></br>
            <h4>Locate US</h4><h6>abcd</h6>
        </div>
        <div class="ft4">
            <form name="msgForm" action="" method="post" onSubmit="return validateForm()">
                <div class="form1">
                    <input type="text" name="fname" placeholder="First Name" onblur="validateName()" >
                    <input type="text" name="lname" placeholder="Last Name" onblur="validateLName()" ></br>
                </div>
                <div class="form2">
                    <input type="email" name="email" placeholder="Enter email" onblur="validateEmail()" >
                    <input type="text" name="msg" placeholder="Message" onblur="validateMsg()" >
                </div>
                <div class="form3" align="center"><button type="submit" class="btn btn-danger">Submit</button></div>
            </form>
        </div>
    </div>
    <br/>
        <div align="center" class="socialbtns socail">
        <ul>
        <li><a href="#" class="fa fa-lg fa-facebook"></a></li>
        <li><a href="#" class="fa fa-lg fa-twitter"></a></li>
        <li><a href="#" class="fa fa-lg fa-google-plus"></a></li>
        <li><a href="#" class="fa fa-lg fa-pinterest"></a></li>
        <li><a href="#" class="fa fa-lg fa-linkedin"></a></li>
        <li><a href="#" class="fa fa-lg fa-instagram"></a></li>
        </ul>
        </div>
</div>
        
 





<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button type="button" class="btn btn-outline-light">Search</button>
  </form>
  <div class="logo"><img src="image1/logo.png" width="100px" height="100px;" alt="NO IMAGE"></div>
   <div class="nv">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active lis">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active lis">
        <a class="nav-link" href="inner2.php">Gallery<span class="sr-only">(current)</span></a>
      </li>
     <li class="nav-item active lis">
       <a class="nav-link" href="#contact">Contact Us<span class="sr-only">(current)</span></a>
     </li>
    </ul>
  </div>
  </nav>  
    <script src="js/jquery-3.3.1.slim.min.js"  crossorigin="anonymous"></script>
    <script src="js/popper.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="js/validations.js"></script>
 </html>
<?php
if(isset($_POST['fname']) && $_POST['fname']!="" && $_POST['lname']!="" && $_POST['email']!="" && $_POST['msg']!=""){    
    $qry = "INSERT INTO contact (fname,lname,email,msg) VALUES('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['msg']."')";
        
    $con->query($qry);
}
        
?>
<?php
require_once("dbclose.php");
?>