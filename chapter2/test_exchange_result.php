<!DOCTYPE html>
<html>
  <body>
    <?php
    define('DOLLAR_TO_EURO_RATE', 2);
    $userInput = $_GET['userInput'];    
      ?>
    <p>
      <?php
        if (!is_numeric($userInput)){
          echo "Invalid Input";
        } else{
          echo "$userInput in EUROS is " . ($userInput * DOLLAR_TO_EURO_RATE);
        }
      ?>
    </p>
  </body>
</html>