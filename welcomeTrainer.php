<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <!--Bootstrap-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="mainJavaScript.js"></script>
  <link rel="stylesheet" type="text/css" href="settings.css">
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Welcome</title>

  <style>
  #welcomeRow{
    background-color: #527a7a;
    color: #FFF;
    text-align: center;
  }
  div.image {
    background-image: url('welcomePic.jpg');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    position:relative;
    min-height:600px;

  }
  @media screen and (max-width:699px){
    .mainTitle{font-size: 200%;}
  }
  .mainTitle {
   position: absolute;
   text-align: center;
   font-family: "Building";
   color: white;
   top: 140px;
   left: 0;
   width: 100%;
   font-size: 700%;
  }
  #buttonStyle {
    background-color: #2e71dd;
    font-family: "Arial";
    font-size: 120%;
    font-weight: bold;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    max-width: 100%;
    border-radius: 30px;
  }
  button a:link, button a:visited{
    color:white;
    text-decoration: none;
  }
  #center1{
    position: absolute;
    text-align: center;
    top: 280px;
  }
  #center2{
    position: absolute;
    text-align: center;
    top: 345px;
  }

  </style>
</head>
  <body>
    <!--Include JQuery: necessary for Bootstrap plugins-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!--Include bootstrap library as needed-->
    <script src="js/bootstrap.min.js"></script>
    <!--navbar-inverse for reversing the colour of the nav menu-->
    <nav>
      <div class = "container">
        <div class = "row">
          <div class = "col-sm-4 col-md-2 col-lg-2">
            <a href="welcomeTrainer.php"><img src = "HELPFitLogo.jpg" alt = "HELPFitLogo" display = "inline-block"></a>
          </div>
          <div class = "col-sm-2 col-md-1 col-lg-1 col-md-offset-6">
          <a class="navlink" id = "tophover" href = "loginAbout2.html">About</a>
          </div>
        <div class = "col-sm-4 col-md-1 col-lg-1">
        <a class="navlink" id = "tophover" href = "loginFitness2.html">Fitness</a>
        </div>
        <div class="col-sm-4 col-md-1 col-lg-2">
          <div class="nav navlink">
            <a class="dropdown-toggle" id="tophover" data-toggle="dropdown">Welcome!
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu" id="navhover">
              <li><a href="settings2.php">Settings</a></li>
              <li class="divider"></li>
              <li><a href="Home Page.html"> Sign Out</a></li>
            </ul>
          </div>
        </div>
      </div>
	</div>
</nav>

<div class="container-fluid">
  <div class="row">
    <div class = "image">
      <h1 class = "mainTitle">Welcome, <?php if (isset($_SESSION['user'])){echo $_SESSION['user']['fullname'];} ?></h1>
    <div class = "col-xs-12 col-sm-12" id = "center1">
    <button type="submit" id = "buttonStyle"><a href = "viewTrainingHistory.php">View Training History</a></button>
  </div>
  <div class = "col-xs-12 col-sm-12" id = "center2">
   <button type="submit" id = "buttonStyle"><a href = "newTraining.html">Record New Training Session</a></button>
   </div>
 </div>
  </div>
</div>

    <footer>
        <div class = "container">
          <div class ="row">
            <div class = "col-xs-5 col-sm-2 col-sm-offset-1">
              <h4>Links</h4>
              <ul class = "list-unstyled" id = "bottomhover">
                <li><a href = "loginAbout.html">About</a></li>
                <li><a href = "loginFitness.html">Fitness</a></li>
              </ul>
            </div>
            <div class = "col-xs-6 col-sm-5">
              <h4>Our Address</h4>
              <p>Jalan Semantan, Bukit Damansara, 50490 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur, Malaysia.</P>
            </div>

            <div class = "col-xs-6 col-sm-4">
              <h4>Find Us On</h4>
              <ul class = "list-unstyled" id = "bottomhover">
              <a class="btn btn-social-icon btn-facebook" onclick="facebookLink()">
                  <span class="fa fa-facebook"></span>
              </a>
              <a class="btn btn-social-icon btn-twitter" onclick="twitterLink()">
                <span class="fa fa-twitter"></span>
              </a>
              <a class="btn btn-social-icon btn-instagram" onclick="instagramLink()">
                <span class="fa fa-instagram"></span>
              </a>
            </ul>
            </div>
            <div class = "col-xs-12">
              <!--to provide invisible space for webiste-->
              <p style = "padding:10px;"</p>
              <p align = "center">Copyright &copy; HELPFit 2017. All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </footer>
  </body>
</html>
