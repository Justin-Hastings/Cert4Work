<!DOCTYPE html>

<html lang="en" >

  <head>

    <meta charset="utf-8">
    <title>All Boat Brands</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/styles.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/57f658d791.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    </style>

  </head>

  <body>

    <button onclick="scrollTopFunction()" id="scrollTopBtn" title="Go to top"><i class="fas fa-caret-square-up scrlTpBtnIcn"></i></button>

    <div class="row header">
      <?php include ('php/constantPage/header.php'); ?>
    </div>

    <div>
      <?php include ('php/constantPage/linksBar.php'); ?>
    </div>

    <br>

    <div class="container">
      <div class="row">
        <h1>Our Boat Brands</h1>
      </div>
      <br>

      <div id="quintrexBoats">
        <div class="row">
          <h3>Quintrex Boats</h3>
        </div>
        <div class="row">
          <div class="col-12 col-lg-8">
            <p class="abtPara">
              The iconic Quintrex range of alloy boats are competively priced and are always in stock. The entire range
              is designed and built for the tough Australian conditions, ensuring a good day on the water won't turn
              into disaster due to a faulty boat. <br>
              For more info on these boats, head over to the <a href="http://www.quintrex.com.au/">Quintrex website.</a>
            </P>
          </div>
          <div class="col-1"></div>
          <div class="col-12 col-lg-3">
            <img class="boatBrandLogo" src="img/boats/logos/quintrexLogo.jpg"></img>
          </div>
        </div>
      </div>

      <br><br>

      <div id ="hookerBoats">
        <div class="row">
          <h3>Hooker Boats</h3>
        </div>
        <div class="row">
          <div class="col-12 col-lg-8">
            <p class="abtPara">
              This premier fibreglass boat manufacturer, based right here in Cairns, provide quality boats for getting up the shallow creeks
              right through to catering for reef and offshore fishing trips. These boats are built and tested in Cairns and are sure to handle
              the harsh conditions faced by boaties here in Far North Queensland. All of these boats are custom built and as such, are able to be
              modified to suit your individual needs! <br>
              For more info on these boats, head over to the <a href="https://www.hookerboats.com/">Hooker boats website.</a>
            </P>
          </div>
          <div class="col-1"></div>
          <div class="col-12 col-lg-3">
            <img class="boatBrandLogo" src="img/boats/logos/hookerLogo.png"></img>
          </div>
        </div>
      </div>

      <br><br>

      <div id="barCrusherBoats">
        <div class="row">
          <h3>Bar Crusher Boats</h3>
        </div>
        <div class="row">
          <div class="col-12 col-lg-8">
            <p class="abtPara">
              This leading alloy boat builder is based in Australia and leads the industry in terms of the design and quality of the
              plate boats on the market. There is a boat in this range to suit everyones needs, whether it be a side or centre Console
              for fishing freshwater, creeks or out the front, all the way up to the big cabin boats for extending offshore missions. <br>
              For more info on these boats, head over to the <a href="https://www.barcrusher.com.au/">Bar Crusher boats website.</a>
            </P>
          </div>
          <div class="col-1"></div>
          <div class="col-12 col-lg-3">
            <img class="boatBrandLogo" src="img/boats/logos/barCrusherLogo.jpg"></img>
          </div>
        </div>
      </div>

    </div>


    <div class=" ">
      <?php include ('php/constantPage/footer.php'); ?>
    </div>


    <script type="text/javascript" src="js/functions.js"></script>
  </body>

</html>
