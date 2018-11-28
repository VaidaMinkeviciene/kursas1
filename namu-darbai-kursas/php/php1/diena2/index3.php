<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $cities3 = array(
               'Tokijas' => array(13.6, 1868, 'Japonija'),
               'Vasingtonas' => array(0.6, 1790, 'JAV'),
               'Maskva' => array(11.5, 1147, 'Rusija'),
           );
    $metai = 1774;
    if($metai >= $cities3['Vasingtonas'][1]) {
        echo "Vašingtonas yra JAV sostinė.";
    } elseif($metai == 1774) {
        echo "JAV sostinė vis dar Filadelfijoje.";
    } else {
        echo 'Liko ' . ($cities3['Vasingtonas'][1] - $metai) . ' metai(-ų) iki Vašingtono įkūrimo.';
    }
?>
  </body>
</html>
