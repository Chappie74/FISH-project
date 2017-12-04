<h1 class="text-center">Purchase a Product</h1>
<br>
<br>




	<?php if($_SESSION["account_type"] == "customer"): ?>
	<table class="table table-bordered table-hover">
	    <thead>
	      <tr>
	        <th>Product Name</th>
	        <th>Brand</th>
	        <th>Type</th>
	        <th>Avaliable</th>
	        <th>Price</th>
	        <th>Amount</th>
	      </tr>
	    </thead>
	    <tbody>
	      <?php foreach ($items as $item): ?>
	      	<form method="POST" action="../public/buy.php">
	      	<?php if ($item["amount"] != 0): ?>
	        <tr>	          
	          <td><?php echo $item["name"];?></td>
	          <input type="hidden" name="p_id" value="<?php echo $item["product_id"];?>">
	          <td><?php echo $item["brand"];?></td>
	          <td><?php echo $item["type"];?></td>
	          <td><?php echo $item["amount"];?></td>	
	          <td>$<?php echo $item["marked_price"];?></td>	
	          <input type="hidden" name="price" value="<?php echo $item["marked_price"];?>">          
	          <td>
	          	<input type="number" min="1" max="<?php echo $item["amount"]?>" required name="amount">	          	
	          </td>
	          <td><button type="submit" class="btn btn-sm btn-primary">Purchase</button></td>	                   
	        </tr>
	        <?php endif; ?>
	        </form>  
	      <?php endforeach;?>    
	    </tbody>
	</table>
	<?php endif; ?>
