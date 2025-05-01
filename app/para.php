<?php

function X(){
	$caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZ-abcdefghijklmnopqrstuvwxyz";
	$desordenada = str_shuffle($caracteres);
	return substr($desordenada, 1, rand(4,13));
	}

?>