<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

if ($_POST['from'] != $_POST['to']) {
    if (isset($_POST['year']) && 
        isset($_POST['month']) && 
        isset($_POST['day']) && 
        isset($_POST['time']) &&
        isset($_POST['price']) >= 1  
            ) {
        
    }
} else {
    echo 'Popełniłeś błąd...';
}