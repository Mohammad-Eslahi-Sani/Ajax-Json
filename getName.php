<?php

	function getName(){
		$lines = file('database.txt');
		return $lines[0]	;
	};


?>