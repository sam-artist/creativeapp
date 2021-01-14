<?php
$pages = array(
  "art"=>"Art",
  "media"=>"Media",
  "index"=>"About"
   
);

  function uniform_page($array, $current_page){
    foreach ($array as $pg_id => $pg_name) {
      if ($pg_id==$current_page) {
        $con_id = "class='selected'";
      }else {
        $con_id="class='notSelected'";
      }
      echo "<li><a " . $con_id . " href='" . $pg_id. ".php'>$pg_name</a></li>";
    }
  }



  ?>



  
