<?php
            if(!isset($_POST['submit']) || empty($_POST['vardas']) || empty($_POST['pavarde'])){
        ?>

        <form method="post" action="<?php $_PHP_SELF; ?>">
            <p>Įrašykite savo vardą ir pavardę.</p>
            <p>Vardas:  <input type="text" name="vardas" size="25" /><br />
            Pavardė:  <input type="text" name="pavarde" size="25" /></p>
            <input type="submit" name="submit" value="Siųsti" />
        </form>
        <?php
            } else {
                $vardas = $_POST['vardas'];
                $pavarde = $_POST['pavarde'];
                
                echo 'Vardas: ' . $vardas . '<br />Pavardė: ' . $pavarde;
            }
        ?>
