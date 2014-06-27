<!--This is a one page FAKE concurreny converter.-->
<!doctype html>
<html>
<body>
<h2>One page concurrency converter</h2>
<?php
	if ( !isset($_POST['submit']) ) {
?>
    <form method="post" action="convertToEuro.php">
      <input type="text" name="userInput"size="10">
      <input name="submit" type="submit" value="Get the value in Euros" />
    </form>
<?php
	} else {
	$valueInDollars = $_POST['userInput'];
	echo $valueInDollars . " dollars is " . $valueInDollars * 2 . " euros";
	}
?>
</body>
</html>