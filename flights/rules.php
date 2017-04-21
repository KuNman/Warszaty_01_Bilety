<?php

require_once __DIR__ . '/vendor/autoload.php';
$faker = Faker\Factory::create();
use NumberToWords\NumberToWords;
$numberToWords = new NumberToWords();
$currencyTransformer = $numberToWords->getCurrencyTransformer('pl');

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
         setcookie('year', $year);
         $month = $_POST['month'];
         setcookie('month', $month);
         $day = $_POST['day'];
         setcookie('day', $month);
         $time = explode(':', $_POST['time']);
         $hr = $time[0];
         setcookie('hr', $hr);
         $mnt = $time[1];
         setcookie('mnt', $mnt);
         $from = $_POST['from'];
         setcookie('from', $from);
         $to = $_POST['to'];
         setcookie('to', $to);
         $lenghthrs = $_POST['lenghthrs'];
         setcookie('lenghthrs', $lenghthrs);
         $price = $_POST['price'];
         setcookie('price', $price);
         $fromTmz = array_column($airports, 'timezone', 'name')[$_POST['from']];
         setcookie('fromTmz', $fromTmz);
         $toTmz = array_column($airports, 'timezone', 'name')[$_POST['to']];
         setcookie('toTmz', $toTmz);
         $fromCd = array_column($airports, 'code', 'name')[$_POST['from']];
         setcookie('fromCd', $fromCd);
         $toCd = array_column($airports, 'code', 'name')[$_POST['to']];
         setcookie('toCd', $toCd);

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
    echo '<font color="white">Popełniłeś błąd...</font>';
}
?>
