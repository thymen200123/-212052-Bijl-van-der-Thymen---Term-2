<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>calulator</title>
</head>
<style>
	body {
		background-image: url("b.jpg");
	}

	p {
		color:white;
	}
</style>
<body>
	<form method="POST">
		<input type="text" name="num1" placeholder="number 1">
		<select name="operator">
			<option>nix</option>
			<option>+</option>
			<option>-</option>
			<option>x</option>
			<option>/</option>
		</select>
		<input type="text" name="num2" placeholder="number 2">
		<br>
		<button type="submit" name="submit" value="submit">calculate</button>
	</form>
	<p>the answer is:
	<?php
		if(isset($_POST['submit'])) {
			$result1 = $_POST['num1'];
			$result2 = $_POST['num2'];
			$operator = $_POST['operator'];

		
			switch ($operator) {
				default:
					echo "kan niet";
				break;
				
				case "nix":
					echo "you need to select a operator!";
				break;
				case "+":
					echo $result1 + $result2;
				break;
				case "-":
					echo $result1 - $result2;
				break;
				case "x":
					echo $result1 * $result2;
				break;
				case "/":
					if ($result2 == 0) {
						echo "kannie";
						break;
					}	
					else {
						echo $result1 / $result2;
 						break;
					}
				break;
				
				
			}	
		}

	?> </p>
</body>
</html>
