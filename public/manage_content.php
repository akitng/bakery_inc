<?php include("../includes/layout/header.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/database_connection.php") ?>

<?php
if (isset($_GET["subject"])) {
	$selected_subject_id = $_GET["subject"];
	$selected_page_id = null;
} elseif (isset($_GET["page"])) {
		$selected_page_id = $_GET["page"];
		$selected_subject_id = null;
	} else {
		$selected_subject_id = null;
		$selected_page_id = null;
	}
?>

<div id="main">	
	<div id= "navigation">
	<?php //include("../includes/navigation.php") ?>
	<?php echo navigation ($selected_subject_id, $selected_page_id); ?>
	</div>
	
	<div id="page">
		
		<?php if ($selected_subject_id) { ?>
					<h2>Manage Subject: <h2>
					<?php $current_subject = find_subject_by_id($selected_subject_id); ?>
		<?php } elseif ($selected_page_id) { ?>
					<h2>Manage Page: <h2>
					<?php $current_page = find_page_by_id($selected_page_id); ?>
			<?php } else {; ?>
					<p>Please select a subject or a page.</p>
				<?php } ?>
				
	</div>
</div>

<?php include("../includes/layout/footer.php"); ?>
<?php mysqli_close($connection); ?>