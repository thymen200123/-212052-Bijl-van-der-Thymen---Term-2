<?php 
	include_once 'header.php'
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Home</h2>
		<?php  
			if (isset($_SESSION['u_id'])) {
				echo "You are logged in! </br>";
				echo "You can now ";
				echo '<a href="homepage.php">click here </a>';
				echo "to acces the main site. ";

			}
		?>
	</div>
</section>

<?php 
	include_once 'footer.php'
?>

