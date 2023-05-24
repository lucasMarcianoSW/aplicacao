<?php
	//lista de ips permitidos
	$array = array("google.com.br", "secureway.com.br",);

	$target = $_REQUEST[ 'host' ];
	
	if (in_array($target, $array)) {
   		$cmd = shell_exec( 'host ' . $target );
		echo $cmd;
	}
	else {
    		echo "Parametro nao aceito";
	}

?>

