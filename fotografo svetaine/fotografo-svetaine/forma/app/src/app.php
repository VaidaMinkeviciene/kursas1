<?php

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include_once 'db.php';
    $vardas = mysqli_real_escape_string($conn, $_POST['vardas']);

    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $message = mysqli_real_escape_string($conn, $_POST['message']);

    if(!empty($vardas) && !empty($email) && !empty($message)) {
      if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $from = "$email";

        $to = "minkevicienevaida@gmail.com";

        $subject = "Nauja žinutė";

        $autorius = 'Žinutė nuo: ' . $vardas . ', ' . $email;

        $zinute = "$message";

        mail ($to,$subject,$autorius,$zinute,$from);

        echo "<script>alert('Dėkojame.Šiandiena su Jumis susisieksime.');</script>";

      }

    }

  }
