<?php
    $target = $_REQUEST[ 'ip' ];
    $cmd = shell_exec( 'ping  -c 2 ' . $target );
    echo $cmd;

?>

