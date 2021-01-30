<?php 

session_start();

$connect = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($connect));

$id = 0;
$update = false;
$name = '';
$location = '';

if (isset($_POST['save'])) {
	$name = $_POST['name'];
	$location = $_POST['location'];

	$connect-> query("INSERT INTO data (name, location) VALUES('$name', '$location')") or die($connect->error);
	$_SESSION['message'] = "Record has been saved";
	$_SESSION['msg_type'] = "success";

	header("location: admin.php");
}

if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$connect->query("DELETE FROM data WHERE id=$id") or die($connect->error()); 
	$_SESSION['message'] = "Record has been deleted";
	$_SESSION['msg_type'] = "danger";

	header("location: admin.php");

}

if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $connect->query("SELECT * FROM data WHERE id=$id") or die($connect->error());
	if (count ($result)==1){
		$row = $result->fetch_array();
		$name = $row['name'];
		$location = $row['location'];

	}

}

if (isset($_POST['update'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$location = $_POST['location'];

	$connect->query("UPDATE data SET name='$name', location='$location' WHERE id=$id") or die($connect->error);

	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";

	header('location: admin.php');
}

?>