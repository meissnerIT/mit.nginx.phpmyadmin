<?php
/**
 * 
 */

$i=0;
$i++;
$cfg['Servers'][$i]['auth_type']     = 'cookie';

foreach (glob('/usr/local/etc/phpmyadmin/conf.d/*.php') as $filename) {
    include($filename);
}

