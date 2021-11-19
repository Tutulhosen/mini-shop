<?php 
include_once "autoload.php";
?>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Product Info</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

	<?php 
	
	if (isset($_POST['add'])) {

		$name= $_POST['name'];
		$price= $_POST['price'];
		$sprice= $_POST['sprice'];
		$category= $_POST['category'];
		$desc= $_POST['desc'];
		$slug= slug('name');

		if (empty($name) || empty($price) || empty($sprice) || empty($category)) {
			$mgs= validation("All fields are require");
		} else {
			$file_name= move($_FILES['photo'], 'assets/media/product/');
			create("INSERT INTO products (name, price, sprice, category, description, slug, photo) VALUES ('$name', '$price', '$sprice', '$category', '$desc', '$slug', '$file_name')");
			$mgs= validation("Product added successfully");
			cleardata();
		}
		
		
		
		




	}
	
	
	?>
	
	
	
	
	

	
	
	


			<!--form area-->

			<div class="wrap shadow">
				<div class="card">
					<div class="card-body">
						<h2>Productt info</h2>
						<?php  
						  if (isset($mgs)) {
							echo $mgs;
						  }
						?>

						<form action="" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label for="">Name</label>
								<input name="name" class="form-control" type="text" value="<?php old('name'); ?>">
							</div>

							<div class="form-group">
								<label for="">Price</label>
								<input name="price" class="form-control" type="text"value="<?php old('price'); ?>">
							</div>

							<div class="form-group">
								<label for="">Sell Price</label>
								<input name="sprice" class="form-control" type="text" value="<?php old('sprice'); ?>">
							</div>

							<div class="form-group">
								<label for="">Category</label>
								<select class="form-control"  id="" name="category">
									<option value="">--select--</option>
									
									<option value="Men">Men</option>
									<option value="Women">Women</option>
									<option value="Kids">Kids</option>
									<option value="Electronic">Electronic</option>
									
								</select>
							</div>

							<div class="form-group">
								<label for="">Description</label>
								<textarea class="form-control" name="desc" id="" ></textarea>
							</div>

						
							

							<div class="form-group">
								<label for="">photo</label>
								<input name="photo" type="file" value="">
							</div>

							<div class="form-group">
								
								<input name="add" class="btn btn-md btn-primary" type="submit" value="Add">

							</div>

						</form>
						
					</div>
					<div class="card-footer">
						<a href="index.php">back</a>
					</div>
				</div>
				
			</div>

			<br>
			<br>
			<br>
			<br>
			<br>








	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>

</html>