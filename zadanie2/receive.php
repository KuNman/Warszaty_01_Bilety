<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if ($_POST[1] != $_POST[2] &&
      $_POST[1] != $_POST[3] &&
      $_POST[1] != $_POST[4] &&
      $_POST[1] != $_POST[5] &&
      $_POST[1] != $_POST[6] &&
      $_POST[2] != $_POST[1] &&
      $_POST[2] != $_POST[3] &&
      $_POST[2] != $_POST[4] &&
      $_POST[2] != $_POST[5] &&
      $_POST[2] != $_POST[6] &&
      $_POST[3] != $_POST[1] &&
      $_POST[3] != $_POST[2] &&
      $_POST[3] != $_POST[4] &&
      $_POST[3] != $_POST[5] &&
      $_POST[3] != $_POST[6] &&
      $_POST[4] != $_POST[1] &&
      $_POST[4] != $_POST[2] &&
      $_POST[4] != $_POST[3] &&
      $_POST[4] != $_POST[5] &&
      $_POST[4] != $_POST[6] &&  
      $_POST[5] != $_POST[1] &&
      $_POST[5] != $_POST[2] &&
      $_POST[5] != $_POST[3] &&
      $_POST[5] != $_POST[4] &&
      $_POST[5] != $_POST[6] &&  
      $_POST[6] != $_POST[1] &&
      $_POST[6] != $_POST[2] &&
      $_POST[6] != $_POST[3] &&
      $_POST[6] != $_POST[4] &&
      $_POST[6] != $_POST[5]
     ) {
         $lotto1 = mt_rand(1, 49);
         $lotto2 = mt_rand(1, 49);
         $lotto3 = mt_rand(1, 49);
         $lotto4 = mt_rand(1, 49);
         $lotto5 = mt_rand(1, 49);
         $lotto6 = mt_rand(1, 49);
         echo 'Wybrane liczby to : ' . $_POST[1] . ' ' . $_POST[2] . ' ' .
                 $_POST[3] . ' ' . $_POST[4] . ' ' . $_POST[5] . ' ' . $_POST[6] . '</br>';
         echo 'Wylosowane liczby to : ' .  $lotto1 . ' ' . $lotto2 . ' ' .
                 $lotto3 . ' ' . $lotto4 . ' ' . $lotto5 . ' ' . $lotto6;
         
         $lottoArray = [$lotto1, $lotto2, $lotto3, $lotto4, $lotto5, $lotto6];
         
         $same = (array_unique(array_merge($_POST, $lottoArray)));
         $result = array_count_values($same);
         
         foreach ($result as $key => $value) {
             
             if ($value == 1) {
                 echo '<br>' . 'Nic nie wygrałeś.' . '<br>';
                 break;
             }             
             elseif ($value == 2) {
                 echo 'Wygrałeś dwójkę - 50zł.';
             }
             elseif ($value == 3) {
                 echo 'Wygrałeś trójkę - 500zł.';
             }
             elseif ($value == 4) {
                 echo 'Wygrałeś czwórkę - 5 000zł.';
             }
             elseif ($value == 5) {
                 echo 'Wygrałeś piątkę - 50 000zł.';
             }
             elseif ($value == 6) {
                 echo 'Wygrałeś szóstkę - 500 000zł.';
             } 
         }  
  }
}
?> 
