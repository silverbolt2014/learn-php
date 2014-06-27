<!doctype html>
<html>
  <body>
    <?php
  $tempInC = $_GET['inputTemp'];
  $tempInF = (9/5) *$tempInC + 32;
  echo $tempInC . "C in Fahrenheit is " . $tempInF
?>
  </body>
</html>