<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/database_connection.php"); ?>

<?php
	if (isset($_POST['submit'])) {
		$menu_name = $_POST['menu_name'];
		$position = $_POST['position'];
		$visible = $_POST['visible'];

		$query = "INSERT INTO subjects (";
		$query .= "menu_name, position, visible";
		$query .= ") VALUES (";
		$query .= "'{$menu_name}', {$position}, {$visible}";
		$query .= ")";
		$result = mysqli_query($connection, $query);

		} else {
			redirect_to("new_subject.php");
	}
?>