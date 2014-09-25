<?php
  require 'vendor/autoload.php';
  use dev\t1 as t1;
  use dev\t2 as t2;
  echo t1\t1::info();
  echo t2\t2::info();
?>
