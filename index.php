<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Calculator</title>
</head>
<body>
<h1>PHP Calculator</h1>
<h2>Callum Andrew (103994591)</h2>
<form method="post">
	<input type="number" step="any" name="number1" value="<?php echo (empty($_POST["number1"]) ? 0 : $_POST["number1"]); ?>">
	<select name="operator">
		<?php
			foreach (array("+", "–", "×", "÷") as $operator) {
				if (!empty($_POST["operator"]) && $operator == $_POST["operator"]) {
					echo "<option selected>$operator</option>";
				}
				else {
					echo "<option>$operator</option>";
				}
			}
		?>
	</select>
	<input type="number" step="any" name="number2" value="<?php echo (empty($_POST["number2"]) ? 0 : $_POST["number2"]); ?>">
	<input type="submit" value="=">
	<input type="text" readonly value="<?php
		if (isset($_POST["operator"])) {
			switch ($_POST["operator"]) {
				case "+":
					echo $_POST["number1"] + $_POST["number2"];
					break;
				case "–":
					echo $_POST["number1"] - $_POST["number2"];
					break;
				case "×":
					echo $_POST["number1"] * $_POST["number2"];
					break;
				case "÷":
					echo $_POST["number1"] / $_POST["number2"];
					break;
			}
		}
	?>">
</form>
</body>
</html>
