<!DOCTYPE html>

<html lang="en" >

  <head>

    <meta charset="utf-8">
    <title>Services</title>
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

    <div class="container">

      <div class="about">
        <div class="row">
          <div class="col-12">
            <h2 class="abtTitle"><b>Our Services</b></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-8 abtPara">
            Troics Marine have a team of highly skilled technicians, qualified to work on
            all motor brands. You will get the right advice and only the best service
            for your boat. We only fit Yamaha outboards and stock genuine yamaha parts
            but we can source parts for other brands if required.<br><br>
            We can also install after-market accessories to your boat.
            <br>
          </div>
          <div class="col-1"></div>
          <div class="col-3">
            <img class="serviceAbtImg" src="img/yamahaLogo.png"></img>
            <img class="serviceAbtImg" src="img/welder1.jpg"></img>
          </div>
        </div>
      </div>

      <div class="fit-service">
        <div class="row">
          <div class="col-12">
            <h2 class="abtTitle"><b>Motor Services</b></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <p class="abtPara"> We can repower your boat with a new Yamaha outboard with
              genuine guages. We can also service and repair all outboard brands. If you
              require spare parts to fix a motor, we can source them from the manufacturer
              for you. We also have a small team of mobile mechanics that can service your
              motor at your house.
            </p>
          </div>
        </div>
        <div class="row motorServicesImages rowBackColor1">
          <div class="col-12 col-md-3">
            <img class="servicesImg" src="img/yamahaService.jpg"></img>
          </div>
          <div class="col-0 col-md-1"></div>
          <div class="col-12 col-md-3">
            <img class="servicesImg" src="img/yamahaOutboard.jpg"></img>
          </div>
          <div class="col-0 col-md-1"></div>
          <div class="col-12 col-md-3">
            <img class="servicesImg" src="img/tropicsMarineUte.png"></img>
          </div>

        </div>
      </div>

      <div class="afterMarketServices">
        <div class="row">
          <div class="col-12">
            <h2 class="abtTitle"><b>After Market Services</b></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <p class="abtPara">Here at Tropics Marine, we have a team of highy skilled team
              that develop and fit aftermarket products for boats. Our products are of the
              highest quality and we use them on our own boats. By bringing your boat to us,
              you can guarantee it will be in safe hands.
            </p>
          </div>
        </div>
        <div class="whatWeDo">
          <div class="row">
            <div class="col-12">
              <h3>What we do</h3>
            </div>
          </div>
          <div class="row">
            <p class="weDoList">
              <i class="fas fa-check-square"></i> Bow mount thruster plates <br>
              <i class="fas fa-check-square"></i> Strengthen transoms <br>
              <i class="fas fa-check-square"></i> Live bait tanks <br>
              <i class="fas fa-check-square"></i> After market consoles - Both side and centre configurations <br>
              <i class="fas fa-check-square"></i> Underfloor fuel tanks <br>
              <i class="fas fa-check-square"></i> Repair old trailers <br>
              <i class="fas fa-check-square"></i> Bait boards <br>
              <i class="fas fa-check-square"></i> Berley buckets <br>
            </p>
          </div>
        </div>

        <br>

        <div class="afterMarketSamples">
          <div class="row">
            <h3 class="sampleAftMarkTitle">Sample after market jobs</h3>
          </div>
          <div class="row afterMarketImages rowBackColor1">
            <!-- images -->
            <div class="col-6 col-md-4 col-lg-3 col-xl-2">
              <img class="sampleServicesImg" src="img/services/bowMountThrusterPlate.jpg"></img>
            </div>
            <div class="col-6 col-md-4 col-lg-3 col-xl-2">
              <img class="sampleServicesImg" src="img/services/baitTank.jpg"></img>
            </div>
            <div class="col-6 col-md-4 col-lg-3 col-xl-2">
              <img class="sampleServicesImg" src="img/services/aftermarketConsole.jpg"></img>
            </div>
            <div class="col-6 col-md-4 col-lg-3 col-xl-2">
              <img class="sampleServicesImg" src="img/services/trailerRepair.png"></img>
            </div>
            <div class="col-6 col-md-4 col-lg-3 col-xl-2">
              <img class="sampleServicesImg" src="img/services/baitBoard.jpg"></img>
            </div>
            <div class="col-6 col-md-4 col-lg-3 col-xl-2">
              <img class="sampleServicesImg" src="img/services/berleyBucket.jpg"></img>
            </div>
            <div class="col-6 col-md-4 col-lg-3 col-xl-2">
              <img class="sampleServicesImg" src=""></img>
            </div>

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
