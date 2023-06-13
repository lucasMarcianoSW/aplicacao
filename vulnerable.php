<?php
    $target = $_REQUEST[ 'host' ];
    $cmd = shell_exec( 'host ' . $target );
    echo $cmd;
?>

