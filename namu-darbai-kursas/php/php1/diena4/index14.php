
<?php
  $fromYear = 2008; 
  $thisYear = (int)date('Y'); 
  echo '&#9400;' .$fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');

  ?>