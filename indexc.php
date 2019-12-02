<?php
$curr_pg="index";
include("includes/uniform.php");

$HIDDEN_ERROR_CLASS = "hiddenError";
$submit = $_REQUEST["submit"];
if (isset($submit)) {
  $firstName = $_REQUEST["firstname"];
  if ( !empty($firstName) ) {
    $fnameValid = true;

  } else {
    $fnameValid = false;

  }

  $lastName = $_REQUEST["lastname"];
  if ( !empty($lastName) ) {
    $lnameValid = true;
  } else {
    $lnameValid = false;
  }
  $comment = $_REQUEST["comment"];
  if ( !empty($comment)) {
    $commentValid = true;
  } else {
    $commentValid = false;
  }

  $formValid = $fnameValid && $lnameValid && $commentValid;
  if ($formValid) {

    session_start();
    $_SESSION['fname'] = $firstName;
    $_SESSION['lname'] = $lastName;
    $_SESSION['comment'] = $comment;

    header("Location: submissions.php");
    return;
  }
} else {
  $fnameValid = true;
  $lnameValid = true;
  $commentValid = true;

}?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
</head>

<body>
  <?php include("includes/header.php"); ?>

<div class="images">


<div class="caption">
<p class="head">Embolden Your Creativity</p>
<p class="secondhead">The Revolution is Streamed!</p>
<p class="bodytext">Lorem ipsum dolor sit.</p>
</div>

<img id="image1" src="images/girl3.jpeg" alt="girl">


<div class="caption">
<p class="head" >Embolden Your Creativity</p>
<p class="secondhead">The Revolution is Streamed!</p>
<p class="bodytext">Lorem ipsum dolor sit.</p>
</div>
</div>

<div class="caption">
<p class="head" >Embolden Your Creativity</p>
<p class="secondhead">The Revolution is Streamed!</p>
<p class="bodytext">Lorem ipsum dolor sit.</p>
</div>
</div>

<img id="image2" src="images/girl.jpeg" alt="girl">
<img id="image3" src="images/girl2.jpeg" alt="girl">

<div class="caption">
<p class="head" >Embolden Your Creativity</p>
<p class="secondhead">The Revolution is Streamed!</p>
<p class="bodytext">Lorem ipsum dolor sit.</p>
</div>
</div>

  <div class="content">
    <!-- <h2>About Us </h2>
    <p>
      <span class=bold> Asthete-</span>"a person who has or affects to have a special appreciation of art and beauty."
      Asthete is a website where we post about article--which we define as music, games, and
      traditional art including paintings, drawing...etc. We utilize these mediums
      in hopes of you connecting emotionally with them</p>
      <p><span class=bold> Mood-</span>"a temporary state of mind or feeling."
        On Asthete we hope to inspire your mood and state of mind.
        From our collection of works you can find art, photography, music, and popular games.
        On our art page you may find painting or drawing that we believe could inspire your mood,
        along with questions you can utilize to help you connect more . On our music page
        you can find a selection of music that we hope can inspire emotions such as motivation,
        or love. On our games page, you can find games that currently inspire us and we hope that will
        inspire you also. You can also suggest content that we can post also, Happy hunting!
      </p> -->

      <br>
      <div id="music">
        <div class="pocket"> </div>
        <img src="images/music.png" alt="music">
        <!-- source: https://pixabay.com/en/music-notes-abstract-159870/ -->

        <div class="overlay">
          <div class="text">Music</div>
        </div>
      </div>



      <div id="games">
        <div class="pocket"> </div>
        <img src="images/games.png" alt="games">
        <!-- source:http://maxpixel.freegreatpicture.com/Paint-Art-Abstract-Background-Texture-Colorful-2468874 -->
        <!-- <p> Games</p> -->
        <div class="overlay">
          <div class="text">Games</div>
        </div>
      </div>

      <div id="art">
        <div class="pocket"> </div>
        <img src="images/art.jpg" alt="art">
        <!-- source:http://maxpixel.freegreatpicture.com/Paint-Art-Abstract-Background-Texture-Colorful-2468874 -->
        <div class="overlay">
          <div class="text">Art</div>
        </div>
        <!-- <p>Art</p> -->
      </div>
      <br>


      <div class="ideas">
        <h1> You can submit ideas ideas for playlist, art and games here!   </h1>
        <form method="post"  id="subform"  novalidate>
          <div>
            <label for="firstname">*First Name:</label>
            <input id="firstname" type="text" placeholder="First Name" value="<?php echo($firstName);?>" name="firstname" required>
            <br>
            <span class="errorContainer <?php if ($fnameValid)
            { echo($HIDDEN_ERROR_CLASS);} ?>" id="fnameError">
            Please enter your first name!
          </span>
        </div>

        <div>
          <label for="lastname">*Last Name:</label>
          <input type="text" id="lastname" placeholder="Last Name" value="<?php echo($lastName);?>" name="lastname" required>
          <br>

          <span class="errorContainer <?php if ($lnameValid)
          { echo($HIDDEN_ERROR_CLASS);} ?>" id="lnameError">
          Please enter your last name!
        </span>
      </div>


      <div>
        <label for="comment">*Comments:</label>
        <textarea type="text" id="comment" placeholder="Please leave a comment"
        name="comment" rows="4" cols="50" required><?php echo($comment);?></textarea>
        <br>
        <span class="errorContainer <?php if ($commentValid)
        { echo($HIDDEN_ERROR_CLASS);} ?>" id="commentError">
        Do you have a request?
      </span>
    </div>

    <div id="sub">
      <button  type="submit" class="sub" name= "submit">Submit</button>
    </div>
  </form>
</div>
</div>





</body>
</html>
