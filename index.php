<!DOCTYPE html>
<html>
	<head>
		<title>Calculator</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		
		<div class="container" style="margin-top: 50px">
		
			<?php
				//it is a new comment
				// If the submit button has been pressed it happend
				if(isset($_POST['submit']))
				{
					// Check number values
					if(1 == 1)
					{
						// it returns 300 code status
						if($_POST['operation'] == 'plus')
						{
							header($_SERVER['SERVER_PROTOCOL'] . ' 300 AC/DC', true, 300);
						}
						// it returns 101 code status
						if($_POST['operation'] == 'code 101')
						{
							header($_SERVER['SERVER_PROTOCOL'] . ' 101 code', true, 101);
						}
						// it returns 201 code status
						if($_POST['operation'] == 'code 2xx')
						{
							header($_SERVER['SERVER_PROTOCOL'] . ' 201 code', true, 201);
						}
						// it returns 300 code status
						if($_POST['operation'] == 'code 3xx')
						{
							header($_SERVER['SERVER_PROTOCOL'] . ' 301 code', true, 301);
						}
						// it returns 401 code status
						if($_POST['operation'] == 'code 401')
						{
							header($_SERVER['SERVER_PROTOCOL'] . ' 401 code', true, 401);
						}
						// it returns 403 code status
						if($_POST['operation'] == 'code 403')
						{
							header($_SERVER['SERVER_PROTOCOL'] . ' 403 code', true, 403);
						}
						// it returns 404 code status
						if($_POST['operation'] == 'code 404')
						{
							header($_SERVER['SERVER_PROTOCOL'] . ' 404 code', true, 404);
						}
						// it returns 406 code status
						if($_POST['operation'] == 'code 406')
						{
							header($_SERVER['SERVER_PROTOCOL'] . ' 406 code', true, 406);
						}
						// it returns 4xx code status
						if($_POST['operation'] == 'code 4xx')
						{
							header($_SERVER['SERVER_PROTOCOL'] . ' 402 code', true, 402);
						}
						// it returns 500 code status
						if($_POST['operation'] == 'code 5xx')
						{
							header($_SERVER['SERVER_PROTOCOL'] . ' 501 code', true, 501);
						}
						if($_POST['operation'] == 'minus')
						{
							header($_SERVER['SERVER_PROTOCOL'] . ' 182 <- Blink', true, 182);
						}
						if($_POST['operation'] == 'times')
						{
							$total = is_numeric($_POST['number1']) * $_POST['number2'];	
						}
						// it returns 500 code status
						if($_POST['operation'] == 'divided by')
						{
							header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);	
						}
						
						// Print total to the browser
						echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";
					
					} else {
						
						// Print error message to the browser
						echo 'Numeric values are required';
					
					}
				}
			
			?>
		    
		    <!-- Calculator form -->
		    <form method="post" action="index.php">
		        <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
		        <select name="operation">
		        	<option value="plus">Plus</option>
		            <option value="minus">Minus</option>
					<option value="code 101">Code 101</option>
					<option value="code 2xx">Code 2xx</option>
					<option value="code 3xx">Code 3xx</option>
					<option value="code 401">Code 401</option>
					<option value="code 403">Code 403</option>
					<option value="code 404">Code 404</option>
					<option value="code 406">Code 406</option>
					<option value="code 4xx">Code 4xx</option>
					<option value="code 5xx">Code 5xx</option>
		            <option value="times">Times</option>
		            <option value="divided by">Divided By</option>
		        </select>
		        <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
		    </form>
	    
		</div>
	
	</body>
</html>