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
    <link rel="stylesheet" type="text/css" href="inner1.css">
    <link href="https://fonts.googleapis.com/css?family=BenchNine|El+Messiri|Lobster|Lobster+Two|Merienda|Dosis|Neucha|Charm" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
            
    
    <title>Tri Trip</title>
  </head>
    <?php
                $eid=0;
                if(isset($_REQUEST['eid']) && $_GET['eid']!=""){
                $eid=$_GET['eid'];
                }
?>
<?php
    $qry2 = "SELECT * FROM place WHERE status = 1 AND eventid=".$eid;
    $result2 = $con->query($qry2);
    if($result2->num_rows > 0){
	while($row2 = $result2->fetch_assoc()){
?>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image1/<?php echo $row2['image'];?>" class="d-block w-100 image" alt="NO IMAGE">
      <div class="carousel-caption d-none d-md-block">
        <h5 align="center"><?php echo $row2['title']; ?></h5>
        </p><?php echo $row2['subtitle']; ?></p>
      </div>
    </div>
  </div>
</div>







<div>
    <h1 align="center" class="wlm"><?php echo $row2['wel']; ?></br><hr></h1>
  </div>
<div>
    <h2 class="wlm1"><?php echo $row2['intro']; ?></h2>
  </div>
<?php
	}
}
?>







<div class="explor" >
    <div class="exp"><img height="300px" width="500px" src="image1/exp.jpg" > <div class="exp1"></div><div class="exp11"><a href="#Experiences"><h3>EXPERIENCES</h3></a></div></div>
    <div class="exp"><img height="300px" width="500px" src="image1/pv.jpg" ><div class="exp1"></div><div class="exp11"><a href="#Place"><h3>PLACE TO VISIT</h3></a></div></div>
    <div class="exp"><img height="300px" width="500px" src="image1/map.jpg" ><div class="exp1"></div><div class="exp11"><a href="#Map"><h3>MAP</h3></a></div></div>
    <div class="exp"><img height="300px" width="500px" src="image1/acti.jpg" ><div class="exp1"></div><div class="exp11"><a href="#Activities"><h3>ACTIVITIES</h3></a></div></div>
</div>













<div id="Experiences">
    <div>
        <h1 align="center" class="expe">EXPERIENCES</br><hr></h1>
    </div>
<?php
    $qry2 = "SELECT * FROM experience WHERE status = 1 AND eventid=".$eid;
    $result2 = $con->query($qry2);
    if($result2->num_rows > 0){
	while($row2 = $result2->fetch_assoc()){
?>
    <div class="expe11">
        <div class="expe1"><img width="400px" height="250px" src="inner1/<?php echo $row2['image']; ?>"></div>
        <div class="expe2"><h2 class="head"><?php echo $row2['place']; ?></h2><?php echo $row2['descrip']; ?></div>
    </div>
    <?php
	}
}
?>

</div>









<div id="Place">
    <div>
        <h1 align="center" class="expe">PLACE TO VISIT</br><hr></h1>
    </div>
    <div class="place">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="place1">
             <div class="place11"><img height="500px" width="450px" src="inner1/effil.png.jpg" ><div class="place111"><h3 align="center">Eiffel Tower</h3></div></div>
             <div class="place11"><img height="500px" width="450px" src="inner1/arc.png.jpg" ><div class="place111"><h3 align="center">Arc de Triomphe</h3></div></div>
             <div class="place11"><img height="500px" width="450px" src="inner1/lou.png" ><div class="place111"><h3 align="center" >Lovure</h3></div></div>
             <div class="place11"><img height="500px" width="450px" src="inner1/museero.png" ><div class="place111"><h3 align="center" >Musse Rodin</h3></div></div>
        </div>
    </div>
    <div class="carousel-item">
      <div class="place1">
             <div class="place11"><img height="500px" width="450px" src="inner1/canal.png" ><div class="place111"><h3 align="center">Canal St-Martin</h3></div></div>
             <div class="place11"><img height="500px" width="450px" src="inner1/cat.png" ><div class="place111"><h3 align="center">Cathédrale Notre</h3></div></div>
             <div class="place11"><img height="500px" width="450px" src="inner1/basili.png" ><div class="place111"><h3 align="center" >Basilique</h3></div></div>
             <div class="place11"><img height="500px" width="450px" src="inner1/muse.png" ><div class="place111"><h3 align="center" >Musée d’Orsay</h3></div></div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
</div>








<?php
    $qry2 = "SELECT map FROM visit WHERE status = 1 AND eventid=".$eid;
    $result2 = $con->query($qry2);
    if($result2->num_rows > 0){
	while($row2 = $result2->fetch_assoc()){
?>

<div id="Map">
     <div>
        <h1 align="center" class="expe">MAP</br><hr></h1>
    </div>
    <div align="center"><iframe src=<?php echo $row2['map']; ?> width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></div>
</div>
 <?php
	}
}
?>








<div>
    <div>
        <h3 class="ft" align="center">Connect With Us</h3>
    </div>
    <div class="ft1">
        <div class="ft11" ><h4>Email Us</h4><h6>rajvijodhani@gmail.com</h6>
        </div>
        <div class="ft12" ><h4>Locate US</h4><h6>abcd</h6>
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
      <button type="button" class="btn btn-outline-light btn1">Search</button>
  </form>
  <div class="logo"><img src="image1/flogo.png" width="100px" height="100px;" alt="NO IMAGE"></div>
   <div class="nv">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active lis">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item active lis">
        <a class="nav-link" href="index.php#contact">Contact<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
  </nav>  
    <script src="js/jquery-3.3.1.slim.min.js"  crossorigin="anonymous"></script>
    <script src="js/popper.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
 
</html>
<?php
include("dbclose.php");
?>

