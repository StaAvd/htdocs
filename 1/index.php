<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Bild efter tid!</title>
  <style>
    .carousel-inner
    {width: =70%;
     margin-left:23%;
    }
  </style>


  </head>

        <body>   

          <?php 
                     
                date_default_timezone_set("Europe/Stockholm");  

                      $timme = date("H");
                     
                      if ($timme < "12") {
                          echo '<h1><FONT COLOR="blue">God morgon!</FONT></h1>';
                          //echo '<img src="img/morning.jpg" alt="MorgonBild">';
echo 
  '<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
  </ol>

 
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/Chrysanthemum.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Chrysanthemum.jpg</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>

    <div class="item">
      <img src="img/Hydrangeas.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Hydrangeas.jpg</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>

    <div class="item">
      <img src="img/Lighthouse.jpg" alt="Flower">
      <div class="carousel-caption">
        <h3>Lighthouse.jpg</h3>
        <p>Beatiful flowers in Kolymbari, Crete.</p>
      </div>
    </div>

    <div class="item">
      <img src="img/Tulips.jpg" alt="Flower">
      <div class="carousel-caption">
        <h3>Tulips.jpg</h3>
        <p>Beatiful flowers in Kolymbari, Crete.</p>
      </div>
    </div>

    <div class="item">
      <img src="img/Desert.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Desert.jpg</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>

    <div class="item">
      <img src="img/Jellyfish.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Jellyfish.jpg</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>

    <div class="item">
      <img src="img/Penguins.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Penguins.jpg</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>

  </div>';


                      } else
                     
                      if ($timme >= "12" && $timme < "17") {
                          echo '<h1><FONT COLOR="blue">God eftermiddag!</FONT></h1>'; 
                          echo '<img src="img/afternoon.jpg" alt="Eftermiddagsbild">';
                      } else
                      
                      if ($timme >= "17" && $timme < "22") {
                          echo '<h1><FONT COLOR="blue">God kväll!!!!</FONT></h1>'; 
                          echo '<img src="img/evening.jpg" alt="Eftermiddagsbild">';
                      } else
                    
                      if ($timme >= "22") {
                           echo '<h1><FONT COLOR="blue">God natt!</FONT></h1>'; 
                           echo '<img src="img/night.jpg" alt="NattBild">';
                      }


            ?>
  
  <!--zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">       
        
  </body>
    
</html>
