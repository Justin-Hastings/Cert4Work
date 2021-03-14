<!DOCTYPE html>

<html lang="en" >

  <head>

    <meta charset="utf-8">
    <title>Contact Us</title>
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
          <div class="col-">
            <h2 class="abtTitle"><b>Contact Us</b></h2>
          </div>
        </div>
        <div class="row">
          <!-- Bit of info about us -->
          <p class="abtCntctUsPara">
            We are a new company but all of our team members are mad keen boating
            enthusiasts and we will do everything we can to help you get out and enjoy
            you time on the water. With our range of boats, motors, trailers, equipment,
            electronics, our services on offer and our friendly team, you are sure to find
            what you need. You can also check the weather to ensure a good day isn't wrecked by
            bad weather.
          </p>
        </div>

        <br><br>

        <!-- Contact details and opening hours -->
        <div class="row">
          <div class="col-">
            <h3>
              Contact Details
            </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-4">
            <p class="">
              <i class="fas fa-map-marked-alt mr-3"></i> 100 Aumuller Street, Cairns
            </p>
            <p class="">
              <i class="fas fa-envelope mr-3"></i> Enquiries@tropics.marine.com.au
            </p>
            <p>
              <i class="fas fa-phone-alt mr-3"></i> (07) 4062 8842
            </p>
            <br>
          </div>
          <div class="col-12 col-md-4">
            <table class="hrsListTable">
              <h5>Trading Hours</h5>
              <tr><th>Monday:</th><td>6:00am-5:00pm</td></tr>
              <tr><th>Tuesday:</th><td>6:00am-5:00pm</td></tr>
              <tr><th>Wednesday:</th><td>6:00am-5:00pm</td></tr>
              <tr><th>Thursday:</th><td>6:00am-5:00pm</td></tr>
              <tr><th>Friday:</th><td>6:00am-5:00pm</td></tr>
              <tr><th>Saturday:</th><td>8:00am-12:00pm</td></tr>
              <tr><th>Sunday:</th><td>CLOSED</td></tr>
            </table>
            <br>
          </div>
          <div class="col-12 col-md-4">
            <table class="hrsListTable">
              <h5>Servicing Hours</h5>
              <tr><th>Monday:</th><td>6:00am-5:00pm</td></tr>
              <tr><th>Tuesday:</th><td>6:00am-5:00pm</td></tr>
              <tr><th>Wednesday:</th><td>6:00am-5:00pm</td></tr>
              <tr><th>Thursday:</th><td>6:00am-5:00pm</td></tr>
              <tr><th>Friday:</th><td>6:00am-5:00pm</td></tr>
              <tr><th>Saturday:</th><td>8:00am-11:00am</td></tr>
              <tr><th>Sunday:</th><td>CLOSED</td></tr>
            </table><br>
            <p>Saturday is for drop-off or pickup only</p>
          </div>
          <br>
        </div>

        <br><br>

        <div class="row">
          <!-- Locate us section with map -->
          <h4>Find us on the map:</h4>
          <div id="locateUsMap"></div>

        </div>

        <div class="row">
          <!-- Enquiry form **Maybe if time allows** -->
        </div>
      </div>

    </div>

    <div class=" ">
      <?php include ('php/constantPage/footer.php'); ?>
    </div>


    <script type="text/javascript" src="js/functions.js"></script>
    <script async defer type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCXUP4_MGkXGIh0U59UdJivRwkY15a5fo&callback=initMap"
    ></script>
  </body>

</html>
