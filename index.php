<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta author="Gustav Ihlenfeld">
  <title>Cold, Hot, with PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <h1><i>Cold, Hot, with PHP</i></h1>
  <img src="./images/temp.png" alt="guess" style="float: right; margin: 0 10px;">
  <p><b><u>Enter the current temperature in Celsius:</u></b></p>

  <form action="result.php" method="post">
    <label for="temperature">Temperature:</label>
    <input type="number" id="temperature" name="celsius" placeholder="Temperature in Celsius">
    <br><br>
    <button type="submit">Submit</button>
  </form>

  <?php
  // Display result if available
  if(isset($_GET['result'])){
    echo '<p>' . $_GET['result'] . '</p>';
  }
  ?>
</body>
</html>
