
<?php
include("includes/uniform.php");
session_start();
$firstName = $_SESSION['fname'];
unset($_SESSION['firstname']);
$lastName = $_SESSION['lname'];
unset($_SESSION['lastname']);
$comment = $_SESSION['comment'];
$fullName = $firstName . " " . $lastName;


function text_print($firstName, $lastName, $comment){
  $fullName=$firstName." ". $lastName;
  echo "Thanks you ".htmlspecialchars($fullName)." for visiting my blog. You comments and feedback are greatly appreciated. I will do my best
  to respond to any inquiries left for me. Thanks again - Elizabeth";
  }
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>submission</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Great+Vibes">
    <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
    <link rel="stylesheet" type="text/css" href="styles/tablet.css" media="all" />
    <link rel="stylesheet" type="text/css" href="styles/desktop.css" media="all" />
  
</head>

<body>
  <?php include("includes/navigation.php"); ?>


  <div class="submit">
    <p>
      <?php echo text_print($firstName, $lastName, $comment); ?>
    </p>
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
