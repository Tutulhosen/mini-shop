

<?php
include_once "autoload.php";
?>


<?php 
if (isset($_GET['delete_id'])) {
	$delete_id= $_GET['delete_id'];
	delete('products', $delete_id);
	header('localhost:index.php');
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>minishop</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

<div class="wrap-table" style="width: 80%; margin:20px auto 0px;">
 <a class="btn btn-sm btn-primary" href="create.php">Add new product</a>
 <br>
 <br>
	<div class="card shadow">
		<div class="card-body">
			<h2>All products</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>id</th>
						<th style="width: 30%;">Name</th>
						<th>Category</th>
						<th>price</th>
						<th>sell price</th>
						<th>photo</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

					<?php 

					$product_data = all('products');
					$i= 1;

					while($products= $product_data->fetch_object()) :
					
					
					
					?>

			
					<tr>
						<td><?php echo $i; $i++; ?></td>
						<td><?php echo $products->name; ?></td>
						<td><?php echo $products->category; ?></td>
						<td><?php echo $products->price; ?></td>
						<td><?php echo $products->sprice; ?></td>
						<td><img style="height: 40px; width:40px;" src="assets/media/product/<?php echo $products->photo; ?>" alt=""></td>
						<td>
							<a class="btn btn-info btn-sm" href="">Edit</a>
							<a class="btn btn-danger btn-sm" href="?delete_id=<?php echo$products->id ?>">Delete</a>
						</td>
						
					</tr>

					<?php endwhile; ?>
					
				</tbody>
			</table>
		</div>
	</div>
</div>







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>

</html>