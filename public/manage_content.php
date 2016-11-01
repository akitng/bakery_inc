<?php include("../includes/layout/header.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/database_connection.php") ?>

<?php
if (isset($_GET["subjects"])) {
	$subject_is_set = $_GET["subjects"];
	$page_is_set = null;
}
	elseif (isset($_GET["pages"])) {
		$page_is_set = $_GET["pages"];
		$subject_is_set = null;
	} else {
		$subject_is_set = null;
		$page_is_set = null;
	}
?>

<div id="main">	
	<div id= "navigation">
	<?php include("../includes/navigation.php") ?>
	</div>
	
	<div id="page">
		<h2>Manage Content<h2>
		<p><?php echo $subject_is_set ?></p>
		<p><?php echo $page_is_set ?></p>		
	</div>
</div>

<?php include("../includes/layout/footer.php"); ?>
<?php mysqli_close($connection); ?>