<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Fotografija Jums</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/file.css">
  </head>
  <body>
    <img src="images/fono2.jpeg" alt="" id = "backgr">
    <nav>
      <div class="row">
        <div class=" col- col-12 col-s-12 col-l-12 col-xl-12 ">
          <div id="logo">
            <a href="index.php"><i class="fas fa-camera" style="font-size:40px;color:white;text-shadow:2px 2px 4px #9CB5B9;"></i></a>
          </div>
        </div>
        <div class="col- col-12 col-s-10 col-l-10 col-xl-10">
          <ul id="list">
            <a href="apie.php"><li>Apie</li></a>
            <a href="#paslaugos.php"><li>Paslaugos</li></a>
            <a href="forma/public/forma.php"target="_blank"><li>Užklausa</li></a>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container1">
      <div class="row1">
        <div class=" col- col-12 col-s-12 col-l-12 col-xl-12">
          <h1 id="ontopoff">FOTOGRAFIJA JUMS</h1><br>
        </div>
      </div>
    </div>
    <div class="container1-2">
      <div class="rov1-2">
        <div class=" col- col-12 col-s-12 col-l-12 col-xl-12">
          <div id="text1">
          Fotografavimo kaina gali skirtis priklausomai nuo vestuvių datos, fotografavimo laiko, vietos. Susisiekiant nurodykite:<br>
  Jūsų vestuvių datą, kelioms valandoms arba iki kelintos valandos Jums reikalingos foto paslaugos,kuriame mieste ar šalyje planuojate savo vestuvių šventę.<br>Kartu rasime Jums tinkamiausią sprendimą.
          </div>
        </div>
      </div>
    </div>
    <div class="container2">
      <div class="row2">
        <div class="col- col-12 col-s-10 col-l-12 col-xl-12">
          <div class="">
          <img  src="images\rsz_1rsz_trakai1.jpg" alt="Trakų pilis">
          </div>
          <div class="">
            <img src="images\rsz_1rsz_18 (1).jpg" alt="Vaikų šventės">
          </div>
          <div class="">

              <img src="images\rsz_1rsz_1vokietija11.jpg" alt="Vokietija">
          </div>
          <div class="">
          <img src="images\rsz_1rsz_trakai3.jpg" alt="Trakų gamta">
          </div>
        </div>
      </div>
    </div>
        <div class="container3">
          <div class="row3">
            <div class="col- col-12 col-s-12 col-l-12 col-xl-12">
              <div class="footer">
                <ol>
                  <a href="https://www.facebook.com/reda.bajerciute"><li><i class="fab fa-facebook-f"style="font-size:20px;color:white;"></i></li></a>
                  <a href="tel:+370 65558450"><li><i class="fas fa-mobile-alt"style="font-size:20px;color:white;"></i></li></a>
                  <a href="mailto:vaida.vaimon@gmail.com"><li><i class="far fa-envelope"style="font-size:20px;color:white;"></i></li></a>


                <?php

                $fromYear = 2018;

                $thisYear = (int)date('Y');

                echo '&#9400;' .$fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');
                ?>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
