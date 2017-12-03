<h1 class="text-center">Inventory</h1><br>

<?php if($_SESSION["account_type"] == "admin" ||$_SESSION["account_type"] == "clerk"): ?>
<table class="table table-bordered table-hover">
    <thead>
      <tr>        
        <th>Product Name</th>
        <th>Brand</th>
        <th>Type</th>
        <th>Quantity Avaliable</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($items as $item): ?>
        <tr>          
          <td><?php echo $item["name"];?></td>
          <td><?php echo $item["brand"];?></td>
          <td><?php echo $item["type"];?></td>
          <td><?php echo $item["quantity"];?></td>
          <?php if( $_SESSION["account_type"] == "admin" || $_SESSION["account_type"] == "clerk"): ?>
            <td>
                <a href="<?php echo "../public/update_inventory.php?inventory_id=".$item["inventory_id"] ;?>">Edit</a> |
                <?php if($_SESSION["account_type"] == "admin"): ?>
                  <a href="<?php echo "../public/view_inventory.php?inventory_id=".$item["inventory_id"] ;?>">Delete</a>
                <?php endif;?>
            </td>

          <?php endif; ?>  
        </tr>  
      <?php endforeach;?>    
    </tbody>
</table>
<?php endif; ?>