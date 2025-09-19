<?php  

    // Get IP Config for this local machine
    $ipconfig = shell_exec('ipconfig /all');

    $mac_extract = '';

    // Get clear MAC
    preg_match_all("/([a-fA-F0-9]{2}[:|\-]?){6}/", $ipconfig, $mac_extract); // Estraigo la mac 

    $var = ['7a-b4-b6-73-d0-28'];

    for ($i = 0; $i < count($var); $i++) {

	    $c = strtolower(str_replace("-", ":", $var[$i]));


        echo password_hash($c, PASSWORD_DEFAULT).'<br/>';

    }