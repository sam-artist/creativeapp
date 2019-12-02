<?php
$pages = array(
    "art"=>"Art",
  "media"=>"Media",
    "index"=>"About",


);

  function uniform_page($array, $current_page){
    foreach ($array as $pg_id => $pg_name) {
      if ($pg_id==$current_page) {
        $con_id = "id='uniform'";
      }else {
        $con_id="id='other'";
      }
      echo "<li><a " . $con_id . " href='" . $pg_id. ".php'>$pg_name</a></li>";
    }
  }
  ?>
