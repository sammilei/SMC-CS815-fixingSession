<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<body>
		<form action="" method="GET">
		<h2>Your Order Info</h2>
		<?php
		//display the session
		// foreach ($_SESSION as $key => $value) {
			// echo "yes i have session";
			// echo $key . " => " . $value . "<br>";
		// }
		print_r($_SESSION);
		?>
		<input type="submit" name="checkout" value="Check Out" />
		</form>
		<?php
		//check if the button is clicked
		if ($_SERVER['REQUEST_METHOD'] == 'GET') {
			if (isset($_GET['checkout'])) {
				session_destroy();//destroy the session
				echo "<p><a href='confirm.php'>session destroy</a>";
			} else {
				echo "not yet checkout";
			}
		}
		?>
	
	</body>
</html>