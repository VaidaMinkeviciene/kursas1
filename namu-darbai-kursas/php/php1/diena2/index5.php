<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
            $temp = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23,
                     16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];


            $count = count($temp);

            $total = 0;
            foreach($temp as $t) {
                $total += $t;
            }

            $vidurkis = round($total / $count);

            echo "<p>Vidutinė balandžio mėnesio temperatūra yra $vidurkis C.</p>\n";

            rsort($temp);

            $silciausiaTempPenki = array_slice($temp, 0, 5);
            echo "<p>Šilčiausios temperatūros (penkios): <br />\n";
            foreach($silciausiaTempPenki as $tt){
              echo "$tt C <br/> \n";
            }
            echo "</p>";
            $SalciausiaTempPenki = array_slice($temp, -5, 5);
            echo "<p>Šalčiausios temperatūros(penkios): <br/>\n";
            foreach($SalciausiaTempPenki as $lt){
              echo "$lt C <br/> \n";
            }
            echo "</p>";
        ?>
  </body>
</html>
