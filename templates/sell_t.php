<h1 class="text-center">List a Product For Sale</h1>
<br>
<br>




	<?php if($_SESSION["account_type"] == "supplier" || $_SESSION["account_type"] == "admin" || $_SESSION["account_type"] == "clerk"): ?>
	<table class="table table-bordered table-hover">
	    <thead>
	      <tr>
	        <th>Product Name</th>
	        <th>Brand</th>
	        <th>Type</th>
	        <th>Amount</th>
	        <th>Price</th>
	      </tr>
	    </thead>
	    <tbody>
	      <?php foreach ($items as $item): ?>
	      	<form method="POST" action="#">
	        <tr>	          
	          <td><?php echo $item["name"];?></td>
	          <input type="hidden" name="name" value="<?php echo $item["name"];?>">
	          <td><?php echo $item["brand"];?></td>
	          <input type="hidden" name="brand" value="<?php echo $item["brand"];?>">
	          <td><?php echo $item["type"];?></td>
	          <input type="hidden" name="type" value="<?php echo $item["type"];?>">	            
	          <td>
	          	<input type="number" min="1" max="<?php echo $item["quantity"]?>" required name="amount">
	          	<span><?php echo $item["quantity"]." in inventory"?></span>
	          </td>
	          <td><input type="number" required name="price"></td>	
	          <td><button type="submit" class="btn btn-sm btn-primary">Sell</button></td>          
	        </tr>
	        </form>  
	      <?php endforeach;?>    
	    </tbody>
	</table>
	<?php endif; ?>
































	<!-- <div class="row">		
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
	</div> -->
