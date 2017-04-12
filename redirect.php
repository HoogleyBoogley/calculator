<?php

# Is the button pressed
if (isset(go) {
  
  $dest = $_GET['link'];
  
  # Is it on quadratic(1)?
  if (1 == $dest) {
    header('Location: quadratic.php');
    die;
  
  } else {
    
    # Is it on distance(2)?
    if (2 == $dest) {
      header('Location: distance.php');
      die;
    
    } else {
      
      # Is it on slope(3)?
      if (3 == $dest) {
        header('Location: slope.php');
        die;
      } else {
        header('Location: redirect.php');
      };
    };
  };
};
?>
