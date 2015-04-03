<?php
$dt = new DateTime();
$dt->setTimeZone(new DateTimeZone('UTC'));

echo $dt->format('Y-m-d\TH-i-s');
?>
