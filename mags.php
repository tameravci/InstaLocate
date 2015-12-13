
<?php

  $lat = 33.814864;
  $lng = -84.311949;
  $distance = 1;
  /**
   * Time to make our Instagram api request. We'll build the url using the
   * coordinate values returned by the google maps api
   */
  $instagram_url = 'https://'.
    'api.instagram.com/v1/media/search' .
    '?lat=' . $lat .
    '&lng=' . $lng .
    '&distance=' . $distance .
    '&client_id=606f6415a13347389571abb6260aba6e';

  $instagram_json = file_get_contents($instagram_url);
  $instagram_array = json_decode($instagram_json, true);

?>


<!-- html file beginnnnn -->

<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>What you missed at Mags</title>

    <!-- Bootstrap core CSS -->
    <link href="http://bootswatch.com/darkly/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="docs/assets/js/ie-emulation-modes-warning.js"></script>
    <meta charset="utf-8"/>
  </head>
  <body>
     <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">



          <div class="inner cover">
            <h1 class="cover-heading">Did You Miss Mags Last Night?</h1>
            <p class="lead">We collect the most recent geotagged activity at Maggies and put it at your fingertips.</p>
            <p class="lead">
                <br/>
              
  
    <?php
    if(!empty($instagram_array)){
      foreach($instagram_array['data'] as $key=>$image){

        echo '<img src="'.$image['images']['low_resolution']['url'].'" <img/>';
      }
    }
    ?>


  
            </p>
          </div>
        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="docs/assets/js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>


