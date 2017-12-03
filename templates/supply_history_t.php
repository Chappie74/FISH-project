
<h1 class="text-center">Supply History</h1><br>

<?php if($_SESSION["account_type"] == "supplier" || $_SESSION["account_type"] == "admin" || $_SESSION["account_type"] == "clerk"): ?>
<table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Supplier</th>
        <th>Product Name</th>
        <th>Brand</th>
        <th>Type</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($items as $item): ?>
        <tr>
          <?php if( $_SESSION["account_type"] == "supplier"): ?>
            <td><?php echo $business_name[0]["business_name"];?></td>
          <?php else: ?>
            <td><?php echo $item["business_name"];?></td>
          <?php endif?>
          <td><?php echo $item["name"];?></td>
          <td><?php echo $item["brand"];?></td>
          <td><?php echo $item["type"];?></td>
          <td><?php echo $item["quantity"];?></td>
          <?php if( $_SESSION["account_type"] == "admin"): ?>
            <td><a href="<?php echo "../public/supply_history.php?supplyid=".$item["supply_id"] ;?>">Delete</a></td>
          <?php endif; ?>  
        </tr>  
      <?php endforeach;?>    
    </tbody>
</table>
<?php endif; ?>