<?php

	if (isset($_POST['misal'])) {
		$misal = $_POST['misal'];
	}
	
	 function hesabla($misal){
		if(preg_match('/(\d+)([\+\-\*\/])(\d+)([\+\-\*\/])(\d+)/', $misal, $matches) !== FALSE){
			    $operator1 = $matches[2];
			    $operator2 = $matches[4];

			    if ($operator1 == '+') {
			    	switch($operator2){
				        case '+':
				            $cavab = $matches[1] + $matches[3] + $matches[5];
				            break;
				        case '-':
				            $cavab = $matches[1] + $matches[3] - $matches[5];
				            break;
				        case '*':
				            $cavab = $matches[1] + $matches[3] * $matches[5];
				            break;
				        case '/':
				            $cavab = $matches[1] + $matches[3] / $matches[5];
				            break;
				    }

			    }elseif ($operator1 == '-') {
			    	switch($operator2){
				        case '+':
				            $cavab = $matches[1] - $matches[3] + $matches[5];
				            break;
				        case '-':
				            $cavab = $matches[1] - $matches[3] - $matches[5];
				            break;
				        case '*':
				            $cavab = $matches[1] - $matches[3] * $matches[5];
				            break;
				        case '/':
				            $cavab = $matches[1] - $matches[3] / $matches[5];
				            break;
				    }

			    }elseif ($operator1 == '*') {
			    	switch($operator2){
				        case '+':
				            $cavab = $matches[1] * $matches[3] + $matches[5];
				            break;
				        case '-':
				            $cavab = $matches[1] * $matches[3] - $matches[5];
				            break;
				        case '*':
				            $cavab = $matches[1] * $matches[3] * $matches[5];
				            break;
				        case '/':
				            $cavab = $matches[1] * $matches[3] / $matches[5];
				            break;
				    }

			    }elseif ($operator1 == '/') {
			    	switch($operator2){
				        case '+':
				            $cavab = $matches[1] / $matches[3] + $matches[5];
				            break;
				        case '-':
				            $cavab = $matches[1] / $matches[3] - $matches[5];
				            break;
				        case '*':
				            $cavab = $matches[1] / $matches[3] * $matches[5];
				            break;
				        case '/':
				            $cavab = $matches[1] / $matches[3] / $matches[5];
				            break;
				    }
			    }



			    

			return $cavab;
		}			
	 }

	 echo hesabla($misal);
	

	

?>