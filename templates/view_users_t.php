<h1 class="text-center">Users</h1><br>

<?php if( $_SESSION["account_type"] == "admin"): ?>
<table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Email</th>
        <th>Account type</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($items as $item): ?>
        <tr>          
          <td><?php echo $item["email"];?></td>          
          <td><?php echo $item["account_type"];?></td>  
          <td><a href="../public/view_users.php?user_id="<?php echo $item["user_id"] ?>">Delete</a></td> 
        </tr>  
      <?php endforeach;?>    
    </tbody>
</table>
<?php endif; ?>