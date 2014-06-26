<!DOCTYPE html>
<html>
  <head>
    <title>Project 2-2: An Interactive HTML Color Sampler</title>
  </head>
  <body>
    <h2>Project 2-2: An Interactive HTML Color Sampler</h2>
    <?php
    // get input value
    $r = $_GET['r'];
    $g = $_GET['g'];
    $b = $_GET['b'];

    // generate RGB string from input
    $rgb = $r . ',' . $g . ',' . $b;
    ?>
    
    R: <?php echo $r; ?>
    G: <?php echo $g; ?>
    B: <?php echo $b; ?>
    <p />
    <div style="width:150px; height:150px; border-radius:75px;
                background-color: rgb(<?php echo $rgb; ?>)" />
    
    <p />
    <?php
    $varA = 44;
    echo $varA;
?>
    <br />echo gettype($varA) = 
    <?php echo gettype($varA);
    $varA = null;?>
        <br />echo gettype($varA) = 
    <?php echo gettype($varB);?>
  </body>
</html>