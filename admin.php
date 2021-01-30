<?php include "process.php"; ?>

<?php 

$connect = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($connect));
$result = $connect-> query("SELECT * FROM data") or die ($connect->error);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<body>
	
	<?php 
	if (isset($_SESSION['message'])): ?>

		<div class="alert alert-<?=$_SESSION['msg_type']; ?>">
			<?php 
			echo $_SESSION['message'];
			unset($_SESSION['message']);

			?>

		</div>
	<?php endif; ?>

	<div class="container  mt-2">
		<div class="justify-content-center mr-2 ml-2">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Location</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
					<?php while ($row = $result-> fetch_assoc()): ?>
						<tr>
							<td><?php echo $row['name'] ?></td>
							<td><?php echo $row['location'] ?></td>
							<td>
								<a href="index.php?edit=<?php echo $row['id']; ?>" class="btn btn-outline-info">Edit</a>
								<a href="process.php?delete=<?php echo $row['id']; ?>" class="btn btn-outline-danger">Delete</a>
							</td>
						</tr>
					<?php endwhile; ?>
			</table>
				<?php 
				function pre_r( $array) {
					echo '<pre>';
					print_r($array);
					echo '</pre>';
				  	}
				?>
	    </div>
	    <a class="btn btn-outline-secondary" href="index.php">Back To Login</a>
	</div>

</body>