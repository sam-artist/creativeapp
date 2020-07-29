
<?php
$curr_pg="media";
include("includes/uniform.php");
include("includes/array.php");
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Media</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <link rel="stylesheet" type="text/css" href="styles/mobile.css" media="all" />
</head>
<body>
  <?php include("includes/header.php");
  function print_list($array)
  {
    foreach ($array as $text) {
      echo ("<li>".$text."</li>");
    }
  }?>



  <div class="content">
    <div class="media_intro">

    <h1 class="bold"> Meditate Through Music</h1>
    <br>
    <p> "Music has been scientifically proven to have a powerful effect on the brain.
      Recent research shows that music can help in many aspects of the brain, including pain reduction,
      stress relief, memory, and brain injuries. In the book The Power of Music, Elena Mannes says,
      'Scientists have found that music stimulates more parts of the brain than any other human function.'
      Let’s look at some of the ways music can aid in the healing and stimulation of the human brain."
      </p>
      <h3 class="bold" >Music For The Mood: Create a Playlist</h3>

    </div>


      <div class="counter">
        <div class="cont1">
          <h4 class="bold" h4>Have you been shot by cupid? Here's a playlist to help you catch your butterflies.</h4>
          <?php echo print_list($love_array); ?>
        </div>
        <div class=cont2>
          <img src="images/love.jpg" alt="love">
          <!-- source: https://pixabay.com/en/desktop-background-love-in-love-3061483/ -->
        </div>
      </div>
      <br>


      <div class="counter">
        <div class="cont1">
          <h4 class="bold" >Feeling sad and down? Music is joy, find some in these songs.</h4>
          <?php echo print_list($happy_array); ?>
        </div>
        <div class=cont2>
          <img src="images/happy.jpeg" alt="happy">
          <!-- source:https://www.pexels.com/search/happy/ -->
        </div>
      </div>
      <br>


      <div class="counter">

        <div class="cont1">
          <h4 class="bold" >In need of some motivation? Here's a playlist to give you some confidence.</h4>
          <?php echo print_list($motivation_array); ?>
        </div>
        <div class=cont2>
          <img src="images/motivation.jpg" alt="motivation">
          <!-- source:https://pixabay.com/en/motivation-man-person-silhouette-361783/ -->
        </div>
      </div>
      <br>

      <div class="counter">
        <div class="cont1">
          <h4 class="bold" >Feeling frustrated? Here is a playlist to help you let loose.</h4>
          <?php echo print_list($angry_array); ?>
        </div>
        <div class=cont2>
          <img src="images/angry.jpg" alt="angry">
          <!-- soruce:https://pixabay.com/en/angry-mad-upset-person-young-3126437/ -->
        </div>
      </div>
      <br>


    </div>





  </body>
  </html>
