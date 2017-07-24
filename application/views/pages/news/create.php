<h2> <?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<form action="<?php base_url()?>create" method="POST">
	
	<label for="title">Title</label>
	<input type="input" name="title"/> <br/>
	
	<label for="text">Content</label>
	<input type="text" name="text"/> <br/>

	<button type="submit" name="submit">Create</button>
	
</form>
