<?php
            function stPlotas($a, $b){
                $plotas = $a * $b;
                return $plotas;
            }

            if(!isset($_POST['submit']) || empty($_POST['ilgis']) || empty($_POST['plotis'])){
        ?>

        <form method="post" action="<?php $_PHP_SELF; ?>">
            <p>Įrašykite stačiakampio ilgį ir plotį.</p>
            <p>Ilgis:  <input type="text" name="ilgis" size="1" />
            Plotis:  <input type="text" name="plotis" size="4" /></p>
            <input type="submit" name="submit" value="Skaičiuoti plotą" />
        </form>

        <?php
            } else {
                $a = $_POST['ilgis'];
                $b = $_POST['plotis'];
                echo 'Stačiakampio, kurio kraštinės yra ' . $a . ' ir ' . $b. ', plotas: ' . stPlotas($a, $b);
            }
        ?>
