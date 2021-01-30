<?php require_once "process.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	
	<div class="row col-6 offset-3 justify-content-center" style="margin-top: 150px">
		<div class="card">
		<form action="index.php" method="POST">
			<h4 class="text-center">Sign In</h4>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="<?php echo $name; ?>" placeholder="Enter Your name">
			</div>

			<div class="form-group">
				<label>Location</label>
				<input type="text" name="location" class="form-control" value="<?php echo $location; ?>" placeholder="Enter Your Location">
			</div>

			<div class="form-group text-center">
				<?php 
					if ($update == true): ?>
						<button type="submit" class="btn btn-outline-info mt-2" name="update">Update</button>
				<?php else: ?>
				<button type="submit" class="btn btn-outline-primary mt-2" name="save">Save</button>
			<?php endif; ?>
			</div>

		</form>
	</div>
</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>