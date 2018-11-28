<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <h4>pirma uzduotis antra diena</h4>

    <?php
        $cities = ['Berlynas', 'Roma', 'Londonas'];
        $cities[] = 'Tokijas';
        print_r($cities);
        echo "<br />";
        $cities2 = array(
            'tokijas' => 13.6,
            'vasingtonas' => 0.6,
            'maskva' => 11.5
        );
        $cities2['londonas'] = 8.6;
        print_r($cities2);
    ?> <br />

    <?php echo $cities[1]; ?>

    <ul>
        <li>Gyventojų skaičius: <?php echo $cities2['tokijas'] . ' mln.'; ?></li>
        <li>Gyventojų skaičius: <?php echo $cities2['vasingtonas'] . ' mln.'; ?></li>
        <li>Gyventojų skaičius: <?php echo $cities2['maskva'] . ' mln.'; ?></li>
        <li>Gyventojų skaičius: <?php echo $cities2['londonas'] . ' mln.'; ?></li>
    </ul>
  </body>
</html>
