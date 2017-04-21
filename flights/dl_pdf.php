<?php

include 'rules.php';

$mpdf = new mPDF();
$mpdf->WriteHTML('<html><html lang="en"><head>
        <link rel="stylesheet" type="text/css" href="styleTable.css" />
	<meta charset="utf-8" /></head><div class="table-title">
<h3>Szczegóły rezerwacji : </h3></div><body><table style="width:100%">
  <tr>
    <th class="text-center">Imię</th>
    <th class="text-center">Nazwisko</th>
    <th class="text-center">Wylot</th>
    <th class="text-center">Przylot</th>
    <th class="text-center">Czas lotu</th>
    <th class="text-center">Cena</th>
  </tr><tr>
      <td class="text-center">' . $_COOKIE['fN'] .
    '</td>
      <td class="text-center">' . $_COOKIE['lN'].
    '</td>
    <td class="text-center">' .
        $_COOKIE['from'] . ' ('. $_COOKIE['fromCd']  . ') '. $_COOKIE['dF'] . '</br>' .
    '</td>
    <td class="text-center">' .
        $_COOKIE['to'] . ' ('. $_COOKIE['toCd']  . ') '. $_COOKIE['dL'] . '</br>' .
    '</td>
    <td class="text-center">' . $_COOKIE['lenghthrs'] . 'h' .
    '</td><td class="text-center">' .
        $_COOKIE['price'] . ' PLN ' . '</br>' . ' (' . $_COOKIE['am'] . ')' .
    '</td></tr></table></body></html>');
$mpdf->Output('flight_ticket.pdf', 'D');
?>
