 <?php

$name = "visits";

if (!isset($_COOKIE[$name])) {
    $_COOKIE[$name] = 0;
    echo 'Witaj pierwszy raz na naszej stronie';
} elseif (isset($_COOKIE[$name])) {
    echo 'Witaj po raz ' . $_COOKIE[$name] . ' na naszej stronie.';
}

$_COOKIE[$name] = 1 + (int) max(0, $_COOKIE[$name]);
$result = setcookie($name, $_COOKIE[$name], time() + (86400 * 30 * 365) );

?>