<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $checkUnique = array_unique($_POST);
    $amount = count($checkUnique);
    if ($amount == 6
     ) {
         
         
         $lottoArray = array();
         for($i = 1; $i <= 6; )
            {
               $rand = rand(1, 49);
               if(!in_array($rand, $lottoArray))
            {
               $lottoArray[] = $rand;
               $i++;
            }
}
         
         echo 'Wybrane liczby to : ' . $_POST[1] . ' ' . $_POST[2] . ' ' .
                 $_POST[3] . ' ' . $_POST[4] . ' ' . $_POST[5] . ' ' . $_POST[6] . '</br>';
         echo 'Wylosowane liczby to : ' .  $lottoArray[0] . ' ' .  $lottoArray[1] . ' ' . $lottoArray[2]
                 . ' ' . $lottoArray[3] . ' ' . $lottoArray[4] . ' ' . $lottoArray[5] . '</br>';
 
     
         $won = array_intersect($lottoArray, $checkUnique);
         
         $wonCount = count($won);
         if ($wonCount == 0) {
             echo 'Nic nie wygrałeś :(';
         } elseif ($wonCount == 1) {
             echo 'Wygrałeś 50zł!';
         } elseif ($wonCount == 2) {
             echo 'Wygrałeś 100zł!';
         } elseif ($wonCount == 3) {
             echo 'Wygrałeś 200zł!';
         } elseif ($wonCount == 4) {
             echo 'Wygrałeś 500zł!';
         } elseif ($wonCount == 5) {
             echo 'Wygrałeś 1000zł!';
         } elseif ($wonCount == 6) {
             echo 'Wygrałeś 2500zł!';
         }
         
     }
} elseif ($amount < 6) {
    echo 'Wybrałeś te same liczby. Liczby muszą być unikatowe. ' . 
            "<a href='index.php'>Wybierz ponownie</a>";
}
?>
