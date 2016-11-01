<ul class= "subjects">

	<?php $subject_set = find_all_subjects(); ?>
	<?php			
		while ($subjects = mysqli_fetch_assoc($subject_set)){
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
						$page_set = find_all_pages($subjects["id"]);						
						
						while ($pages = mysqli_fetch_assoc($page_set)) {
					?>		
							<ul class="pages">
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
					<?php mysqli_free_result($page_set); ?>
					
		<?php
		}
		?>
	
	<?php mysqli_free_result($subject_set); ?>
</ul>
