<!DOCTYPE html>

<html lang="en" >

  <head>

    <meta charset="utf-8">
    <title>Tropics Marine</title>
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

    <div class="container-fluid">

      <div class="row slideshow">

      </div>

    </div>

    <div class="container">

      <div class="about">
        <div class="row">
          <div class="col-12">
			       <h2 class="abtTitle"><b>About Tropics Marine</b></h2>
           </div>
         </div>
         <div class="row">
           <div class="col-12 col-md-8 ">
             <p class="abtPara">
               Welcome to Tropics Marine, your local marine dealership right here in Cairns.
               We are the local dealer for (brands) and are proud to be the only Minn Kota Pro
               Store in the Far North Queensland region.
               We service all brands of outboard and inboard motors, however, we only stock Yamaha outboards.
            <br><br>
               Like you, we are all mad keen fisho's and love getting out on the water. We only
               stock the highest quality products that are built last. Whether your after a new
               boat, want a new motor for an old boat or require anything else involving boats,
               just pop in and say G'Day and we'll help you out.
            </p>
           </div>
           <div class="col-0 col-md-1"></div>

           <div class="col-3 col-md-3">
             <img class="minnKotaProStoreImg" src="img/minnKotaProStore.jpg"></img>
           </div>
         </div>
       </div>

	     <div class="row tipsRow">
        <div class="col-12">
           <h2 class="tipsTitle"><b>Tips for successful boating:</b></h2>
           <!-- Add tips here -->
         </div>
      </div>
      <div class="row">
        <div class="col-12">
          <p class="padLeft30">
            The easiest ways to ensure your marine products are kept in good condition are to:
            <ul class="tipsList padLeft60">
              <li>Wash everything down with fresh soapy water after every trip</li>
              <li>Flush the engine after every trip, especially if used in salt water</li>
              <li>Service the motor regularly</li>
            </ul>
          </p>
        </div>
      </div>
      <div class="row tipsVideos">
        <div class="col-12 col-md-5">
          <iframe class="boatTipsVid" src="https://www.youtube.com/embed/cQyuIjWFqoc?controls=1" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
          </iframe>
        </div>
        <div class="col-0 col-md-2"></div>
        <div class="col-12 col-md-5">
          <iframe class="motorTipsVid" src="https://www.youtube.com/embed/2nUvoDj1RRs?controls=1" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
          </iframe>
        </div>
      </div>
<br>

		</div><!--Closing container div-->


    <div class=" ">
      <?php include ('php/constantPage/footer.php'); ?>
    </div>


    <script type="text/javascript" src="js/functions.js"></script>
  </body>

</html>
