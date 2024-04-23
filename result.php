<?php
if(isset($_POST['celsius'])){
    $temperature = $_POST['celsius'];

    // Determine result based on temperature
    if($temperature < 15){
      $result = "It's cold.";
    } else {
      $result = "It's hot.";
    }

    // Redirect back to index.php with the result as a query parameter
    header("Location: index.php?result=" . urlencode($result));
    exit();
}
?>
