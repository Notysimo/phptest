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
			
				// If the submit button has been pressed
				if(isset($_POST['submit']))
				{
					// Check number values
					if(1 == 1)
					{
						// Calculate total
						//is_numeric($_POST['number1'])
						if($_POST['operation'] == 'plus')
						{
							header($_SERVER['SERVER_PROTOCOL'] . ' 300 AC/DC', true, 300);
						}
						if($_POST['operation'] == 'code 101')
						{
							header($_SERVER['SERVER_PROTOCOL'] . ' 101 code', true, 101);
						}
						if($_POST['operation'] == 'code 2xx')
						{
							header($_SERVER['SERVER_PROTOCOL'] . ' 201 code', true, 201);
						}
						if($_POST['operation'] == 'code 3xx')
						{
							header($_SERVER['SERVER_PROTOCOL'] . ' 301 code', true, 301);
						}
						if($_POST['operation'] == 'code 401')
						{
							header($_SERVER['SERVER_PROTOCOL'] . ' 401 code', true, 401);
						}
						if($_POST['operation'] == 'code 403')
						{
							header($_SERVER['SERVER_PROTOCOL'] . ' 403 code', true, 403);
						}
						if($_POST['operation'] == 'code 404')
						{
							header($_SERVER['SERVER_PROTOCOL'] . ' 404 code', true, 404);
						}
						if($_POST['operation'] == 'code 406')
						{
							header($_SERVER['SERVER_PROTOCOL'] . ' 406 code', true, 406);
						}
						if($_POST['operation'] == 'code 4xx')
						{
							header($_SERVER['SERVER_PROTOCOL'] . ' 402 code', true, 402);
						}
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