<?php
  $dir = "/users/Damian/Documents/School/";
  $files = scandir($dir);
  //print_r($files);
  foreach($files as $key => $value) {
    if (is_dir($value) && $value != '.' && $value != '..'){
      echo '<a href="'. $value.'">'. $value .'</a><br>';
    }
  }
?>