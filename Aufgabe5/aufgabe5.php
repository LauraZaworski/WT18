<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Aufgabe 5</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    function zufzahl($max, $anzahl, $stellen)
    {
        //echo "$zzahl $gerundet2 $gerundet3 <br/>";
        echo "<table class='table table-striped'>";
        echo "<thead>
        <tr>
        <th>Zufallszahl</th>";
        for($j=1; $j<=$stellen; $j++)
        {
          echo "<th>".$j." gerundet </th>";
        }
        echo "</tr>
        </thead>
        <tbody>";


        for($i=1; $i<=$anzahl; $i++)
        {
          $zzahl = rand(1,$max);
          //$gerundet1 = abschneiden($zzahl,1);
          //$gerundet2 = abschneiden($zzahl,2);
          //$gerundet3 = abschneiden($zzahl,3);

          if($zzahl<1000)
          {
            echo "<tr class='text-right' style='background-color:red'>";
          }
          else
          {
            echo "<tr class='text-right' style='background-color:green'>";
          }
          echo "<td>".$zzahl."</td>";
          for($j=1; $j<=$stellen; $j++)
          {
             echo "<td>".abschneiden($zzahl, $j)."</td>";
          }
          echo "</tr>";
      }
      echo "</tbody";
    }

    function abschneiden($zahl,$stellen=2)
    {
      $base = pow(10,$stellen);
      return $zahl - ($zahl % $base);
    } ?>
  </head>
  <body>
    <h1> Zufallszahlen</h1>
    <div>
      <?php zufzahl(2000, 20, 3); ?>
    </div>
  </body>
</html>
