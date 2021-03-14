<!DOCTYPE html>

<html lang="en" >

  <head>

    <meta charset="utf-8">
    <title>Weather</title>
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
            <h2 class="abtTitle"><b>Weather</b></h2>
          </div>
        </div>
        <div class="row">
          <p class="weatherReasons">
            It is important to check the latest forecast before leaving for any trip so that you don't
            get caught out because the weather has changed. It is quick and easy to check the weather and you
            can use your own preferred sites or have a quick look here. Here you can search for you area for the
            Willy Weather report or view the Seabreeze report.
          </p>
        </div>
        <div class="row">
          <div class="col-">
            <h3>Live weather from willyweather</h3><br>
            <p>
              Just search for your area, then select the data that you want to see.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="willyWeatherWidgetParent">
            <iframe id="willyWeatherWidget" src="https://cdnres.willyweather.com.au/widget/loadView.html?id=56716" width="800" height="520" frameborder="0"  scrolling="no"></iframe>
            <a id="willyWeatherAtag" href="https://www.willyweather.com.au/qld/far-north/cairns.html" rel="nofollow">Weather info for Cairns</a>
          </div>
        </div>
        <br><br>
        <div class="row">
          <h3>Live weather from Seabreeze</h3>
        </div>
        <div class="row">
          <!-- Seabreeze Cairns embedded page -->
          <iframe src="https://www.seabreeze.com.au/weather/wind-forecast/qld-far-north" width="80%" height="400"></iframe>.
        </div>
      </div>

    </div>

    <div class=" ">
      <?php include ('php/constantPage/footer.php'); ?>
    </div>


    <script type="text/javascript" src="js/functions.js"></script>
  </body>

</html>
