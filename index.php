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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Great+Vibes">
    <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
    <link rel="stylesheet" type="text/css" href="styles/tablet.css" media="all" />
    <link rel="stylesheet" type="text/css" href="styles/desktop.css" media="all" />


    </head>

<body>
  <?php include("includes/navigation.php"); ?>

  <!-- header tab -->
  <div id="headContent">
    <img id="header-image" src="images/girl3.png" alt="girl">
    <div id="caption">
      <h1>Embolden Your Creativity</h1>
      
      <p>Mediation Through the Arts</p>
      
      <a class="bold" href="#image2">Learn More</a>
    </div>
    <br>
  </div>
  

  <!-- cotent tab -->
  <div class="content">
    
        <img id="blog-image" src="images/girl.jpeg" alt="girl">
        <div class="horizontal-spacer"></div>
        <div class="description">
          <h2>About Blog</h2>

          <p>
            <span class="bold"> Asthete-</span>"a person who has or affects to have a special appreciation of art and beauty."
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
          eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <br>

          <p><span class=bold> Mood-</span>"a temporary state of mind or feeling." On Asthete we hope to inspire your mood and state of mind. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
      </div>
 



  <hr>


  


      <div class="description">
          <h2 >Find you Niche</h2>
          <p>a person who has or affects to have a special appreciation of art and beauty."
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br>
            <br>
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
      </div>

      <div class="horizontal-spacer"></div>

      <img id="blog-image" src="images/girl2.jpeg" alt="girl">




  <hr>

  </div>

  <div class="comments">
    <h2> Leave a comment</h2>
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
      
        <textarea type="text"  placeholder="Please leave a comment"
        name="comment"  required><?php echo($comment);?></textarea>
        <br>
        <span class="errorContainer <?php if ($commentValid)
        { echo($HIDDEN_ERROR_CLASS);} ?>" id="commentError">
        </span>
      </div>

      <div id="sub">
        <button  type="submit" id="comment_button" name= "submit">Submit</button>
      </div>
    </form>
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
