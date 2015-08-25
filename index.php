
<?php 

	function diehmtimer(){
		echo 'He will never return';
	}
	
	function afkdiehm(){
		echo rand(5, 1440) . " minutes until Diehm returns";
	}
	
	$command = $_POST["text"];

	switch ($command){
		case 'diehmtimer':
			diehmtimer();
			break;
		case 'afkdiehm':
			afkdiehm();
			break;
	}
	
?>
