<header>
  <!-- <img id="logo" src="images/logo.png" alt="logo"> -->
  
  <nav id="navbar">
    <ul>
      <?php
      // function uniform loacted in uniform.php
      echo uniform_page($pages, $curr_pg);
      ?> 
    
    </ul>
    
  </nav>


<div class="dropdown">
    <a href="#home" class="active">WS</a>

    <div id="links">
      <a href="index.php">Home</a>
      <a href="media.php">Media</a>
      <a href="art.php">Art</a>
    </div>
     <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  </div>
</header>



  <script>
  function myFunction() {
    var x = document.getElementById("links");
    var caption= document.getElementById("caption");
    if (x.style.display === "block") {
      x.style.display = "none";
      caption.style.top = "10%";
    } else {
      x.style.display = "block";
      caption.style.top = "30%";
    }
  }
  </script>