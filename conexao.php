<?php
    $host="localhost";
    $user="root";
    $senha="";
    $bd="sitect";

    $mysqli = new mysqli($host,$user,$senha,$bd);
    if (empty($mysqli)) {
	    echo "erro";
	}
?>