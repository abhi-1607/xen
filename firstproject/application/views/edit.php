<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  	
<title>edit page</title>
</head>
<body>
	<div class="container">
		<h2>Update your text</h2>
		<div>
			<form action="<?php echo base_url();?>Xentatic_controller/update/<?php echo $notes[0]['id'];?>" name="editForm" method="post">
			<textarea rows="40" cols="100" id="editNote" name="editNote">
				<?php
                            echo $notes[0]['data'];
            	?>
			</textarea>
			<input id="submitbtn" type="submit" class="btn btn-success" value="Submit">
			</form>
		</div>
	</div>
</body>
</html>