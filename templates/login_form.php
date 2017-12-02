<!DOCTYPE html>

<html>

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link href="../public/css/styles.css" rel="stylesheet"/>
        <link rel="stylesheet" href="../public/css/font-awesome.css"> 
        <link href='https://fonts.googleapis.com/css?family=Archivo Narrow' rel='stylesheet'>               
        <link href="../public/css/bootstrap.min.css" rel="stylesheet"/>    
        


        <script src="../public/js/jquery-1.10.2.min.js"></script>        
        <script src="../public/js/bootstrap.min.js"></script>
        <script src="../public/js/login_script.js"></script>
        <script src="../public/js/scripts.js"></script>

        <?php if (isset($title)): ?>

            <title>FISH-<?= htmlspecialchars($title) ?></title>

        <?php else: ?>

            <title>Login/SingUp</title>

        <?php endif ?>

  <style type="text/css">
        .modal {
        text-align: center;
        padding: 0!important;
      }

      .modal:before {
        content: '';
        display: inline-block;
        height: 100%;
        vertical-align: middle;
        margin-right: -4px;
      }

      .modal-dialog {
        display: inline-block;
        text-align: left;
        vertical-align: middle;
      }
  </style>
</head>
<body >


<script type="text/javascript">
    $(window).on('load',function(){
      $('#loginModal').modal({backdrop: 'static', keyboard: false}) 
        $('#loginModal').modal('show');
    });
</script>

<!-- Modal -->
  <div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">  

          <ul class="nav nav-tabs">
            <li class="active"><a href="#login" data-toggle="tab" aria-expanded="false">Log In</a></li>
            <li class=""><a href="#signup" data-toggle="tab" aria-expanded="true">Sign Up</a></li> 
          </ul>
          <br>
          <span class="right text-info">To continue to the site you must first log in or sign up. Thank you.</span>

        </div>
        <div class="modal-body">
          <div id="login_signup" class="tab-content">
              <div class="tab-pane fade active in" id="login">
                <form action="../public/login.php" method="post" name="login">

                  <div class="form-group">
                    <label for="username/email">Username/Email</label>
                    <input type="text" name="username" class="form-control" tabindex="1"  required="required" placeholder="Username/Email" />
                  </div>

                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" tabindex="2" required="required" placeholder="Password" />
                  </div>

                  <div class="col-sm-9"></div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Account type</label>
                      <select class="form-control" name="account_type">
                      <?php foreach ($account_types as $type):?>                        
                          <option id="<?php echo $type["type_id"];  ?>"><?php echo $type["name"]; ?></option>                                                
                      <?php endforeach;?>
                      </select>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-10"></div>
                    <div class="col-md-2">
                      <button type="submit" class="btn btn-primary btn-md" name="btn_type" value="login">Log In</button>
                    </div>
                  </div>                 
                </form>
              </div>

              <!-- Sign up form -->
              <div class="tab-pane fade in" id="signup">
                <form action="../public/login.php" method="POST" name="signup">                  
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>First Name:</label>
                        <input type="text" class="form-control" id="first_name" required name="first_name">
                      </div> 

                      <div class="form-group">
                        <label>Last Name:</label>
                        <input type="text" class="form-control" id="last_name" required name="last_name">
                      </div>

                      <div class="form-group">
                        <label>Address:</label>
                        <input type="text" class="form-control" required name="address">
                      </div>  

                      <div class="form-group">
                        <label>Telephone:</label>
                        <input type="text" class="form-control" required name="telephone">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group" id="email">
                        <label>Email:</label>
                        <input type="email" class="form-control" required name="email">
                      </div>

                       <div class="form-group" id="email">
                        <label>Password:</label>
                        <input type="password" class="form-control" required name="password">
                      </div>

                      <div class="form-group" id="business_name">
                        <label>Business Name:</label>
                        <input type="text" class="form-control " disabled id="business_name" required name="business_name"> 
                      </div>
                        
                      <div class="form-group" >
                        <label>Person of contact:</label>                   
                        <input type="text" class="form-control " disabled id="poc" required name="person_of_contact">
                      </div>

                      <div class="form-group">
                        <label>Account type</label>
                        <select class="form-control" name="account_type">                                                
                            <option id="<?php echo $account_types[0]["type_id"];  ?>"><?php echo $account_types[0]["name"]; ?></option>   
                            <option id="<?php echo $account_types[1]["type_id"];  ?>"><?php echo $account_types[1]["name"]; ?></option>                     
                        </select>
                      </div>
                    </div> 
                  </div> 
                  <div class="row">
                    <div class="col-md-10"></div>
                    <div class="col-md-2">
                      <input type="submit" class="btn btn-primary btn-md" name="btn_type" value="signup"/>
                    </div>
                  </div>                 
                </form>
              </div>
          </div>       
      </div>
      
    </div>
  </div>

</body>
</html>
  