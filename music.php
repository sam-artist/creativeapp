
<?php
$curr_pg="music";
include("includes/uniform.php");
include("includes/array.php");
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Music</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
</head>
<body>
  <?php include("includes/header.php");
  function print_list($array)
  {
    foreach ($array as $text) {
      echo ("<li>".$text."</li>");
    }
  }?>

  <div class="leftimage">
  </div>


  <div class="music">
    <img src="images/girl.jpeg" alt="girl">
    <h1 class="title-centered"> Music</h1>
      <p> “Music gives a soul to the universe, wings to the mind, flight to the
        imagination and life to everything.” ― <span class="bold"> Plato</span></p>
        <p> Suggest playlist or survey our current selections below. Use our suggestions below
          to find these artist and songs on whatever platform you use to listen to music. How do you feel about
          these songs?</p>
        <h3>Music For The Mood: Create a Playlist</h3>

        <div class="counter">
          <div class="cont1">
            <h4>Have you been shot by cupid? Here's a playlist to help you catch your butterflies.</h4>
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
            <h4>Feeling sad and down? Music is joy, find some in these songs.</h4>
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
            <h4>In need of some motivation? Here's a playlist to give you some confidence.</h4>
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
            <h4>Feeling frustrated? Here is a playlist to help you let loose.</h4>
            <?php echo print_list($angry_array); ?>
          </div>
          <div class=cont2>
            <img src="images/angry.jpg" alt="angry">
            <!-- soruce:https://pixabay.com/en/angry-mad-upset-person-young-3126437/ -->
          </div>
        </div>
        <br>


      </div>

      <div class="rightimage">
      </div>

    </body>
    </html>
