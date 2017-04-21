<?php

include 'rules.php';

$a = '<!DOCTYPE html>
    <html lang="en">
<head>
        <link rel="stylesheet" type="text/css" href="styleTable.css" />
        <link rel="stylesheet" type="text/css" href="style.css" />
	<meta charset="utf-8" />
	<title>Podsumowanie</title>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
</head>
<div class="table-title">
<h3>Szczegóły rezerwacji : </h3>
</div>
<body>

<table style="width:100%">
  <tr>
    <th class="text-center">Imię</th>
    <th class="text-center">Nazwisko</th>
    <th class="text-center">Wylot</th>
    <th class="text-center">Przylot</th>
    <th class="text-center">Czas lotu</th>
    <th class="text-center">Cena</th>
  </tr>
  <tr>
      <td class="text-center">' .
        $faker->firstName .
    '</td>
      <td class="text-center">' .
        $faker->lastName .
    '</td>
    <td class="text-center">' .
        $from . ' ('. $fromCd . ') '. '</br>' . $dateF->format('d.m.Y H:m') .
    '</td>
    <td class="text-center">' .
        $to . ' ('. $toCd . ') '. '</br>' . $dateL->format('d.m.Y H:m') .
    '</td>
    <td class="text-center">' .
        $lenghthrs . 'h' .
    '</td>
    <td class="text-center">' .
        $price . ' PLN ' . '</br>' . ' (' . $currencyTransformer->toWords($price*100, 'PLN') . ')' .
    '</td>
  </tr>
</table>
</body>
</html>';
echo $a;
echo '<form action="dl_pdf.php" method="POST"><center><br>
      <input type="submit" value="Drukuj"></button></center>
      </form>';
?>
