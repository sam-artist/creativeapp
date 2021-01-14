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
    <button class="dropbtn">
          <img id="drop-icon" src="images/hamburger_icon.png" alt="ham">
    </button>
    <div class="dropdown-content">
      <a href="index.php">Home</a>
      <a href="media.php">Media</a>
      <a href="art.php">Art</a>
    </div>
  </div>
</header>
