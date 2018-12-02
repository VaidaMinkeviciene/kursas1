
<?php
  $fromYear = 2015; 
  $thisYear = (int)date('Y'); 
  echo '&#9400;' .$fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');

  ?>