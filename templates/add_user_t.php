<h1 class="text-center">Add a User</h1>
<br>
<br>



<form method="POST" action="../public/add_user.php">
	<div class="row">	
			<div class="col-md-4">
				
			</div>		
			<div class="col-md-4">
				<div class="form-group">
					<label>Username/Email:</label>
					<input type="email" name="email" required class="  form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" required class=" form-control">
				</div>	
				<select class="form-control" name="account_type">
                      <?php foreach ($account_types as $type):?> 
                      	<?php if($type["name"] == "admin" || $type["name"] == "clerk" || $type["name"] == "cashier"):   ?>                    
                          <option id="<?php echo $type["type_id"];  ?>"><?php echo $type["name"]; ?></option>
                        <?php endif;?>                                                  
                      <?php endforeach;?>
                </select>
			</div>				
				
			<div class="col-md-4">
				
			</div>		
			<div class="row">
                    <div class="col-md-10"></div>
                    <div class="col-md-2">
                      <button type="submit" class="btn btn-primary btn-md" name="btn_type" value="login">Add User</button>
                    </div>
            </div>  
	</div>
</form>