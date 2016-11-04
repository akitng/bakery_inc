<?php include("../includes/layout/header.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/database_connection.php"); ?>

<?php find_selected_page(); ?>

<div id="main">	
	<div id= "navigation">
		<?php echo navigation($current_subject, $current_page); ?>
	</div>
	
	<div id="page">
		<h2>Create new subject.</h2>
		<form action="create_subject.php" method="post">
			<p>Subject name: 
				<input type= "text" name= "menu_name" value=""/>
			</p>
			<p>Position: 
				<select name= "position">
					<?php 
						$subject_set= find_all_subjects();
						$row_count= mysqli_num_rows($subject_set);
						for ($count= 1; $count<= $row_count + 1; $count++) { 
							echo "<option value=\"{$count}\">{$count}</option>";
				  		}
				  	?>	 
				</select>
			</p>	
			<p>Visible: 
				<input type= "radio" name= "visible" value = "0" />no
				<input type= "radio" name= "visible" value = "1" />yes
			</p>	
			<input type="submit" name="submit" value= "Create Subject" />
		</form>
		<br/>
		<a href= "manage_content.php">Cancel</a>		
	</div>
</div>

<?php include("../includes/layout/footer.php"); ?>
