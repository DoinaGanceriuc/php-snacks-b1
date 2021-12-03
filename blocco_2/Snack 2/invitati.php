<?php
$name = $_GET['name'];
 $invitati = ['Anna', 'Maria', 'Luca'];

 if (in_array($name, $invitati)) {
     echo 'ok';
 } else {
     echo 'ko';
 }

?>