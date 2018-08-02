<?php
$s = "SUKA блять 123";
$string = 'Германия (5)';
$surname = preg_replace("/[^А-Яа-яЁё]/u","", $string);
//echo $result;
echo $surname;
?>
