<h4 class="text-center">Udate Inventory</h4>

<form method="POST" action="../public/update_inventory.php">
	<div class="row">		
			<div class="col-md-6">
				<div class="form-group">
					<label>Name:</label>
					<input type="text" name="name" required value= "<?php echo $items["name"]?>" class="  form-control">
				</div>
				<div>
					<label>Type:</label>
					<input type="text" name="type" value = "<?php echo $items["type"]?>" required class=" form-control">
				</div>	
			</div>				
				
			<div class="col-md-6">
				<div class="form-group">
					<label>Quantity:</label>
					<input type="number" name="quantity" value= "<?php echo $items["quantity"] ?>" required value="1" class=" form-control" min="1">
				</div>
				<div class="form-group">
					<label>Brand:</label>
					<input type="text" name="brand" value= "<?php echo $items["brand"]?>" required class=" form-control">
				</div>
				<input type="hidden" value= "<?php echo $items["inventory_id"]?>" name="inventory_id">
				<div class="form-group">
					<div class="col-sm-10"></div>
					<button class="btn btn-primary col-md-2">Update</button> 
				</div>
			</div>		
	</div>
</form>