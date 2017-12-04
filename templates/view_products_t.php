<h1 class="text-center">Products Listed</h1><br>

<?php if($_SESSION["account_type"] == "admin" ||$_SESSION["account_type"] == "clerk" || $_SESSION["account_type"] == "cashier"): ?>
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
          <td><?php echo $item["amount"];?></td>
          <?php if( $_SESSION["account_type"] == "admin" || $_SESSION["account_type"] == "clerk" || $_SESSION["account_type"] == "cashier"): ?>
            <td>
                <a href="../public/sell.php">Update</a>
            </td>

          <?php endif; ?>  
        </tr>  
      <?php endforeach;?>    
    </tbody>
</table>
<?php endif; ?>