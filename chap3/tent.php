<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
   "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Project 3-2: Tent Assignment</title>
  </head>
  <body>
    <h2>Project 3-2: Tent Assignment</h2>
<?php
    // if form not yet submitted
    // display form
    if (!isset($_POST['submit'])) {
?>
    <form method="post" action="tent.php">
      Enter your age: <br />
      <input type="text" name="age" size="3" />
      <p>
      <input type="submit" name="submit" value="Submit" />      
    </form>
<?php
    // if form submitted
    // process form input
    } else {
      // retrieve age from POST submission
      $age = $_POST['age'];
      
      // assign to one of four tents
      // based on which age "bin" it falls into
      if ($age <= 9) {
          echo "You're in the Red tent.";
      } elseif ($age > 9 && $age <= 11) {
          echo "You're in the Blue tent.";
      } elseif ($age > 11 && $age <= 14) {
          echo "You're in the Green tent.";
      } elseif ($age > 14 && $age <= 17) {
          echo "You're in the Black tent.";
      } else {
          echo "You'd better get in touch with the Scoutmaster.";          
      }
   }
?>
    
  </body>
</html>
