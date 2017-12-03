<h1 class="text-center">Supply A New Product</h1>
<br>
<br>



<form method="POST" action="../public/supply_new.php">
	<div class="row">		
			<div class="col-md-6">
				<div class="form-group">
					<label>Name:</label>
					<input type="text" name="name" required class="  form-control">
				</div>
				<div>
					<label>Type:</label>
					<input type="text" name="type" required class=" form-control">
				</div>	
			</div>				
				
			<div class="col-md-6">
				<div class="form-group">
					<label>Quantity:</label>
					<input type="number" name="quantity" required value="1" class=" form-control" min="1">
				</div>
				<div class="form-group">
					<label>Brand:</label>
					<input type="text" name="brand" required class=" form-control">
				</div>
				<div class="form-group">
					<div class="col-sm-10"></div>
					<button class="btn btn-primary col-md-2">Supply</button> 
				</div>
			</div>		
	</div>
</form>

 