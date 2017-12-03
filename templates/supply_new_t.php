<h1 class="text-center">Supply A New Product</h1>
<br>
<br>



<form method="POST" action="../public/supply_new.php">
	<div class="row">		
			<div class="col-md-6">
				<div class="form-group">
					<label>Name:</label>
					<input type="text" name="name" class=" form-control">
				</div>
				<div>
					<label>Type:</label>
					<input type="text" name="type" class=" form-control">
				</div>	
			</div>				
				
			<div class="col-md-6">
				<div class="form-group">
					<label>Quantity:</label>
					<input type="number" name="quantity" value="1" class=" form-control" min="1">
				</div>
				<div class="form-group">
					<label>Brand:</label>
					<input type="number" name="brand" class=" form-control">
				</div>
			</div>
		</div>
	</div>
</form>