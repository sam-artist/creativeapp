
<?php
$curr_pg="media";
include("includes/uniform.php");
include("includes/array.php");
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Media</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Great+Vibes">
    <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
    <link rel="stylesheet" type="text/css" href="styles/tablet.css" media="all" />
    <link rel="stylesheet" type="text/css" href="styles/desktop.css" media="all" />
  
  </head>
<body>
  <?php include("includes/navigation.php");
  function print_list($array)
  {
    foreach ($array as $text) {
      echo ("<li>".$text."</li>");
    }
  }?>



  <div class="content">
    <h4>Latest Post</h4>
    <br>
    <p><i>3/2/2021</i></p>
    <br>
    <div id="media_intro">

    <h2> Meditate Through Music</h2>
    <br>
    <p> "Music has been scientifically proven to have a powerful effect on the brain.
      Recent research shows that music can help in many aspects of the brain, including pain reduction,
      stress relief, memory, and brain injuries. In the book The Power of Music, Elena Mannes says,
      'Scientists have found that music stimulates more parts of the brain than any other human function.'
      Let’s look at some of the ways music can aid in the healing and stimulation of the human brain."
      </p>
      <br>
      <p> This pandemic has gotten my emotional state all over the place since it began last year. Being stuck inside 
        has forced me to focus on my creative endeavors. What helped me a lot was listening to music no only to foster
        creative energy but to help with mediating my emotional state. There's a playlist for everything!
      </p>

      <h3 class="bold" >Music For The Mood: Create a Playlist</h3>

    </div>


      <div class="playlist">

        <p class="playlist_intro">Have you been shot by cupid? Here's a playlist to help you catch your butterflies.</p>
          <img src="images/love.jpg" alt="love"/>
          <!-- source: https://pixabay.com/en/desktop-background-love-in-love-3061483/ -->
       
         <div class="playlist_text">
          <?php echo print_list($love_array); ?>
        </div>
     
      </div>
      <br>


      <div class="playlist">
          <p class="playlist_intro" >Feeling sad and down? Music is joy, find some in these songs.</p>
          <img src="images/happy.jpeg" alt="happy"/>
          <!-- source:https://www.pexels.com/search/happy/ -->
      
         <div class="playlist_text">
          <?php echo print_list($happy_array); ?>
        </div>
       
      </div>
      <br>


      <div class="playlist">
          <p class="playlist_intro">In need of some motivation? Here's a playlist to give you some confidence.</p>
          <img src="images/motivation.jpg" alt="motivation"/>
          <!-- source:https://pixabay.com/en/motivation-man-person-silhouette-361783/ -->
    
        <div class="playlist_text">
          <?php print_list($motivation_array); ?>
        </div>
     
      </div>
      <br>

      <div class="playlist">
      
          <p class="playlist_intro">Feeling frustrated? Here is a playlist to help you let loose.</p>
          <img src="images/angry.jpg" alt="angry"/>
          <!-- source:https://pixabay.com/en/angry-mad-upset-person-young-3126437/ -->
      
          <div class="playlist_text">
          <?php echo print_list($angry_array); ?>
        </div>
      
      </div>
      <br>


    </div>

    <footer>
      <p>
      <span class="bold" >Contact:
        creativeapp@gmail.com
        <br>
      </span>
     
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure.
      </p>
  </footer>


  </body>
  </html>
