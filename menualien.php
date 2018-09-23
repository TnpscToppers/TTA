<?php 
include('menuserver.php'); 

?>
<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = pg_query($db, "SELECT * FROM menu WHERE id=$id");

		if (count($record) == 1 ) {
			$n = pg_fetch_array($record);
			$name = $n['name'];
			$item = $n['item'];

		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- code for showing message -->
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<!--ends here-->
<!-- to display the details from the db in html -->
<?php $results = pg_query($db, "SELECT * FROM menu"); ?>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>item</th>

			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = pg_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['item']; ?></td>

			<td>
				<a href="menualien.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="menuserver.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>




	<form method="post" action="menuserver.php" >
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
			<label>User Name *</label>
			
			<input type="text" name="name" value="<?php echo $name; ?>">
		</div>
		<div class="input-group">
			<label>item *</label>
			

			
	<input type="password" name="item" value="<?php echo $item; ?>">
		</div>
		<div class="input-group">
			<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" >Sign up</button>
<?php endif ?>
		</div>
	</form>

</body>
</html>