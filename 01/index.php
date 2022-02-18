<?php

	if (isset($_POST['misal'])) {

		$misal = $_POST['misal'];

	}else{

		$misal = '25+54';
	}
	
	 function hesabla($misal){

		if(preg_match('/(\d+)([\+\-\*\/])(\d+)/', $misal, $matches) !== FALSE){

			    $operator = $matches[2];

			    switch($operator){

			        case '+':
			            $cavab = $matches[1] + $matches[3];
			            break;

			        case '-':
			            $cavab = $matches[1] - $matches[3];
			            break;

			        case '*':
			            $cavab = $matches[1] * $matches[3];
			            break;
			            
			        case '/':
			            $cavab = $matches[1] / $matches[3];
			            break;
			    }

			return $cavab;
		}			
	 }

	 echo hesabla($misal);
	

	

?>