<?php include("../includes/layout/header.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/database_connection.php") ?>

		<div id="main">
			<div id= "navigation">

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



				<ul class = "subjects">
				<?php
					$query = "SELECT * FROM subjects";
					$subjects_result = mysqli_query($connection, $query);
					if (!$subjects_result) {
						die("Database query failed.");
					}
				 					
					$subjects = null;
					while ($subjects = mysqli_fetch_assoc($subjects_result)){
				?>	
						<?php				
							echo "<li ";
							if ($subject_is_set == $subjects["id"]) {
								echo "class =\"selected\"";
							} 
							echo ">";	
						?>
						<a href= "manage_content.php?subjects=<?php echo $subjects["id"]; ?>">
							<?php echo $subjects["menu_name"]; ?>  
							</li>

							
							<?php		
								$query = "SELECT * FROM pages WHERE subject_id = {$subjects["id"]}";
								$pages_result = mysqli_query($connection, $query);
								if (!$pages_result) {
									die("Database query failed.");
								}

									
								$pages = null;
								while ($pages = mysqli_fetch_assoc($pages_result)) {
							?>		
								<ul class= "pages">
									<?php
										echo "<li ";
									if ($page_is_set == $pages["id"]) {
										echo "class =\"selected\"";
									} 
									echo ">";	

									?>
										<a href= "manage_content.php?pages=<?php echo $pages["id"]; ?>">
										<?php echo $pages["menu_name"]; ?>  
									</li>
								</ul>
												
								<?php	
								} 
								?>
								<?php mysqli_free_result($pages_result); ?>
								
					<?php
					}
					?>
				
				<?php mysqli_free_result($subjects_result); ?>
				</ul>


				
			</div>


			<div id="page">
				<h2>Manage Content<h2>
				<p><?php echo $subject_is_set ?></p>
				<p><?php echo $page_is_set ?></p>
				
			</div>
		</div>

<?php include("../includes/layout/footer.php"); ?>
<?php mysqli_close($connection); ?>