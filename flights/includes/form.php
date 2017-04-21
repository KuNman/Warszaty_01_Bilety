<?php
if (isset($_POST['price'])) {
     include_once 'rules.php';
     $fN = $faker->firstName;
     $lN = $faker->lastName;
     $am = $currencyTransformer->toWords($price*100, 'PLN');
     setcookie('fN', $fN);
     setcookie('lN', $lN);
     setcookie('am', $am);
     $dF = $dateF->format('d.m.Y H:m');
     setcookie('dF', $dF);
     $dL = $dateL->format('d.m.Y H:m');
     setcookie('dL', $dL);
     $a = '<!DOCTYPE html><html lang="en"><head>
        <link rel="stylesheet" type="text/css" href="styleTable.css" />
	<meta charset="utf-8" /><title>Podsumowanie</title>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
</head><div class="table-title"><h3><center>Szczegóły rezerwacji : </center></h3></div><body>
<table style="width:100%"><tr>
    <th class="text-center">Imię</th>
    <th class="text-center">Nazwisko</th>
    <th class="text-center">Wylot</th>
    <th class="text-center">Przylot</th>
    <th class="text-center">Czas lotu</th>
    <th class="text-center">Cena</th>
    <th class="text-center">Potwierdzenie</th>
  </tr><tr>
      <td class="text-center">' .
        $fN .
    '</td>
      <td class="text-center">' .
        $lN .
    '</td>
    <td class="text-center">' .
        $from . ' ('. $fromCd . ') '. '</br>' . $dF .
    '</td>
    <td class="text-center">' .
        $to . ' ('. $toCd . ') '. '</br>' . $dL .
    '</td>
    <td class="text-center">' .
        $lenghthrs . 'h' .
    '</td>
    <td class="text-center">' .
        $price . ' PLN ' . '</br>' . ' (' . $am . ')' .
    '</td>
        <td class="text-center">' .
        '<form action="dl_pdf.php"><center><br>
      <input type="submit" value="Drukuj"></button></center>
      </form>' .
    '</td></tr></table></body></html>';
echo $a;
}
?>
<div id="content">
    <h1><?php include 'includes/visits.php'; ?></h1>
        <?php include 'includes/airports.php'; ?>
    <h1>Szczegóły lotu
    <form action=" " method="POST" autocomplete="on">
        <p>
            <label for="from" > Z :
                <p>
                <select name="from">
        <?php
        $name = array_column($airports, 'name');
        foreach ($name as $value) {
           echo "<option name=" . $value . '" '. '">' . $value . "</option>";
        }
        ?>
        </p>
        </select>
        </label>
        </p>
        <p>
            <label for="to" > Do :
                <p>
                <select name="to">
        <?php
        $name = array_column($airports, 'name');
        foreach ($name as $value) {
           echo "<option name=" . $value . '" '. '">' . $value . "</option>";
        }
        ?>
        </p>
        </select>
        </label>
        </p>
        <p>
            <label for ="datetime-day" > Dzień wylotu :
            <input type="number" name="year" min="2017" max="2050" step="1" placeholder="rok" required/>
            <input type="number" name="month" min="1" max="12" step="1" placeholder="miesiąc" required/>
            <input type="number" name="day" min="1" max="31" step="1"placeholder="dzień" required/>
        </p>
        <p>
            <label for ="datetime-hour" > Godzina wylotu :
            <input type="time" name="time" required/>
        </p>
        <p>
            <label for ="lenghthrs" > Długość lotu :
            <input type="number" name="lenghthrs" min="0" step="1" required/>
        </p>
        <p>
            <label for ="price" > Cena :
            <input type="number" name="price" min="0" step="1" required/>
        </p>

        <input type="submit" value=" Rezerwuj " />
    </form>
</div>
