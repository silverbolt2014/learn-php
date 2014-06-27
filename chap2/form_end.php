<html>
  <body>
    <h2>Here is the information we received from you</h2>
    <?php echo "The text in the input fied was " . $_POST['userName']; ?> <br />
    <?php echo "The text in the text area was " . $_POST['userComment']; ?> <br />
    <?php echo "The value of the hidden field was " . $_POST['hiddenField']; ?> <br />
    <?php echo "The value of the password field was " . $_POST['pwd']; ?> <br />
    <?php echo "The country selected is " . $_POST['countries']; ?> <br />
    <?php echo "The sex selected is " . $_POST['sex']; ?> <br />
    <?php echo "The checkboxes selected are " . $_POST['dances']; ?> <br />

  </body>
</html>