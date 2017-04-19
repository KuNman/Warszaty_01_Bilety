<?php

include 'includes/airports.php';


if ($_POST['from'] != $_POST['to']) {
    if (isset($_POST['year']) && 
        isset($_POST['month']) && 
        isset($_POST['day']) && 
        isset($_POST['time']) &&
        isset($_POST['lenghthrs']) &&
        isset($_POST['price']) >= 1  
            ) {
         $year = $_POST['year'];
         $month = $_POST['month'];
         $day = $_POST['day'];
         $time = explode(':', $_POST['time']);
         $hr = $time[0];
         $mnt = $time[1];
         $fromTmz = array_column($airports, 'timezone', 'name')[$_POST['from']];
         $toTmz = array_column($airports, 'timezone', 'name')[$_POST['to']];
         $fromCd = array_column($airports, 'code', 'name')[$_POST['from']];
         $toCd = array_column($airports, 'code', 'name')[$_POST['to']];
         
         $dateF = new DateTime();
         $dateF->setDate($year, $month, $day);
         $dateF->setTime($hr, $mnt);
         $dateF->setTimezone(new DateTimeZone($fromTmz));
         
         $dateL = new DateTime();
         $dateL->setDate($year, $month, $day);
         $hrTo = $hr + $_POST['lenghthrs'];
         $dateL->setTime($hrTo, $mnt);
         $dateL->setTimezone(new DateTimeZone($toTmz));
         

    }
} else {
    echo 'Popełniłeś błąd...';
}
?>
<html lang="en">
<head>  
        <link rel="stylesheet" type="text/css" href="styleTable.css" />
	<meta charset="utf-8" />
	<title>Table Style</title>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
</head>

<body>
<div class="table-title">
<h3>Szczegóły rezerwacji : </h3>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-center">Wylot</th>
<th class="text-center">Przylot</th>
<th class="text-center">Czas lotu</th>
<th class="text-center">Cena</th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
    <td class="text-center">
        <?php
        echo $_POST['from'] . ' ('. $fromCd . ')' . '</br>' . 'Data: ';
        echo $dateF->format('d.m.Y H:m')
        ?>
    </td>
    <td class="text-center">
        <?php
        echo $_POST['to'] . ' ('. $toCd . ')' .'</br>' . 'Data: ';
        echo $dateL->format('d.m.Y H:m');
        ?>
    </td>
    <td class="text-center">
        <?php
        echo $_POST['lenghthrs'] . ' h';
        ?>
    </td>
    <td class="text-center">
        <?php
        echo $_POST['price'] . ' PLN';
        ?>
    </td>
</tr> 
</tbody>
</table>
</body>
</html>