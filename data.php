<?php
date_default_timezone_set('Europe/Sofia');
echo date('h:i:sa').'<br>';
$timeStamps = mktime(14,27,0,4,15,1976);
echo $timeStamps .'<br>';
echo date('d/m/y h:i:sa',$timeStamps).'<br>';
$timeStamp2 = strtotime('next Sunday');
echo date('d/m/y h:ia', $timeStamp2) . '<br>';
