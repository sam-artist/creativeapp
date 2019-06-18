
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
  echo "Thanks you ".htmlspecialchars($fullName)." for visting our page!"." Your comment-- ". htmlspecialchars($comment)."--was great!";
  }
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>submission</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
</head>

<body>
  <?php include("includes/header.php"); ?>

  <div class="leftimage">
  </div>

  <div class="submit">
    <p>
      <?php echo text_print($firstName, $lastName, $comment); ?>
    </p>
  </div>
  <div class="rightimage">
  </div>
</body>
</html>
