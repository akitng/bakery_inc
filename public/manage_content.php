<?php include("../includes/layout/header.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/database_connection.php") ?>

<?php
find_selected_page();
?>

<div id="main">	
	<div id= "navigation">
	<?php echo navigation($current_subject, $current_page); ?>
	<a href="new_subject.php">+ Add a subject</a>
	</div>
	
	<div id="page">
		
		<?php if ($current_subject) { ?>
					<h2>Manage Subject</h2>
					Subject: <?php echo $current_subject["menu_name"]; ?>
		<?php } elseif ($current_page) { ?>
					<h2>Manage Page</h2>
					Page: <?php echo $current_page["menu_name"]; ?>
			<?php } else {; ?>
					<p>Please select a subject or a page.</p>
				<?php } ?>
				
	</div>
</div>

<?php include("../includes/layout/footer.php"); ?>
<?php mysqli_close($connection); ?>