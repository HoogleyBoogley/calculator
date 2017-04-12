<?php

# Is the button pressed
# if (isset(go) {
  
#  $dest = $_GET['link'];
  
  # Is it on quadratic(1)?
#  if (1 == $dest) {
#    header('Location: quadratic.php');
#    die;
  
#  } else {
    
    # Is it on distance(2)?
#    if (2 == $dest) {
#      header('Location: distance.php');
#      die;
    
#    } else {
      
      # Is it on slope(3)?
#      if (3 == $dest) {
#        header('Location: slope.php');
#        die;
#      } else {
#        header('Location: redirect.php');
#      };
#    };
#  };
#};
?>

<!DOCTYPE html>
<html>
  <head>
    <title>PHP Calculator</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>PHP Calculator</h1>
    <p>Designed for Algerbra I, Geometry, and Algebra II</p>
    <br />
    <hr />
    <br /><br />    
     
    <form method="GET" action="redirect.php">
      <select name="link">
        
        <option value="DISABLED" disabled>Choose a function</option>
        <option value="1">Quadratic</option>
        <option value="2">Distance</option>
        <option value="3">Slope</option>

      </select>  
      <input type="submit" name="go" value="Submit">
    </form>
    
    
  </body>
</html>
