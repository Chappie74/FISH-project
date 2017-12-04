
<h1 class="text-center">Purchase History</h1><br>

<?php if($_SESSION["account_type"] == "supplier" || $_SESSION["account_type"] == "customer" || $_SESSION["account_type"] == "admin" || $_SESSION["account_type"] == "clerk"):?>
<table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Customer Name</th>
        <th>Customer Email</th>
        <th>Product Name</th>
        <th>Brand</th>
        <th>Type</th>
        <th>Amount</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($items as $item): ?>
        <tr>
          <td><?php echo $item["name"];?></td>
          <td><?php echo $item["email"];?></td>
          <td><?php echo $item["p_name"];?></td>
          <td><?php echo $item["p_brand"];?></td>
          <td><?php echo $item["p_type"];?></td>
          <td><?php echo $item["p_amount"];?></td>
          <td><?php echo $item["p_price"];?></td>          
        </tr>  
      <?php endforeach;?>    
    </tbody>
</table>
<?php endif; ?>