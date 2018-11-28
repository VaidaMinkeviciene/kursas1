<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
            $sarasasValstybiuIrSostiniu = array( "Italija"=>"Roma", "Liuksemburgas"=>"Liuksemburgas", "Belgija"=> "Briuselis", "Danija"=>"Kopenhaga", "Suomija"=>"Helsinkis", "Prancūzija" => "Paryžius", "Slovakija"=>"Bratislava", "Slovenija"=>"Liublijana", "Vokietija" => "Berlynas", "Graikija" => "Atėnai", "Airija"=>"Dublinas", "Nyderlandai"=>"Amsterdamas", "Portugalija"=>"Lisabona", "Ispanija"=>"Madridas", "Švedija"=>"Stokholmas", "Didžioji Britanija"=>"Londonas", "Kipras"=>"Nikosija", "Lietuva"=>"Vilnius", "Čekija"=>"Praha", "Estija"=>"Talinas", "Vengrija"=>"Budapeštas", "Latvija"=>"Ryga", "Malta"=>"Valeta", "Austrija" => "Viena", "Bulgarija" => "Sofija", "Rumunija" => "Bukareštas", "Lenkija"=>"Varšuva");

            asort($sarasasValstybiuIrSostiniu);
            foreach($sarasasValstybiuIrSostiniu as $country => $capital){
                echo 'Valstybė: ' . $country . ', Sostinė: ' . $capital . '<br />';
            }
        ?>
  </body>
</html>
