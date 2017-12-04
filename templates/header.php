<!DOCTYPE html>

<html>

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link href="../public/css/styles.css" rel="stylesheet"/>
        <link rel="stylesheet" href="../public/css/font-awesome.css"> 
        <link href='https://fonts.googleapis.com/css?family=Archivo Narrow' rel='stylesheet'>               
        <link href="../public/css/bootstrap.min.css" rel="stylesheet"/>    
        <?php 
          if(isset($css))
            echo '<link rel="stylesheet" href="'.$css.'"'. "/>";          
        ?>


        <script src="../public/js/jquery-1.10.2.min.js"></script>        
        <script src="../public/js/bootstrap.min.js"></script>
        <script src="../public/js/cart.js"></script>
        <script src="../public/js/scripts.js"></script>

        <?php if (isset($title)): ?>

            <title>FISH-<?= htmlspecialchars($title) ?></title>

        <?php else: ?>

            <title>FISH</title>

        <?php endif ?>

       
        <?php 
          if(isset($script))
          {
              echo '<script type="text/javascript" src="'.$script.'"'. "</script>"; 
          }
        ?>
        
        
       
        </style>
    </head>

    <body>                        
            <nav class="navbar navbar-default navbar-static-top">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="../public/index.php">Home</a>
                </div>
                <ul class="nav navbar-nav">
                  

                  
                  <li class="dropdown">
                    <?php if($_SESSION["account_type"] != "supplier"): ?>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">Products
                    
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <?php if($_SESSION["account_type"] == "admin" || $_SESSION["account_type"] == "clerk"):?>
                        <li><a href="../public/sell.php">Sell</a></li>
                      <?php endif;?>

                      <?php if($_SESSION["account_type"] == "customer"):?>
                        <li><a href="../public/buy.php">Purchase</a></li>
                      <?php endif;?>

                      <?php if($_SESSION["account_type"] == "supplier" || $_SESSION["account_type"] == "admin" || $_SESSION["account_type"] == "clerk"):?>
                        <li><a href="../public/view_products.php">View All</a></li>
                      <?php endif;?>

                      <?php if($_SESSION["account_type"] == "admin" || $_SESSION["account_type"] == "clerk" || $_SESSION["account_type"] == "customer" || $_SESSION["account_type"] == "cashier"):?>
                        <li><a href="../public/products_history.php">History</a></li>
                      <?php endif;?>
                    </ul>
                    <?php endif; ?>
                  </li>

                  <?php if($_SESSION["account_type"] == "admin" || $_SESSION["account_type"] == "clerk"): ?>
                    <li><a href="../public/view_inventory.php">Inventory</a></li>
                  <?php endif;?>

                  <?php if($_SESSION["account_type"] == "supplier" || $_SESSION["account_type"] == "admin" || $_SESSION["account_type"] == "clerk"):?>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="">Supply
                      <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <?php if($_SESSION["account_type"] == "supplier"): ?>
                        <li><a href="../public/supply_new.php">Supply a Product</a></li>
                        <?php endif; ?>
                        <li><a href="../public/supply_history.php">View History</a></li>
                      </ul>
                  </li>
                <?php endif;?>
                </ul>

                <ul class="nav navbar-nav navbar-right">   
                  <li><a>Welcome <?php echo $_SESSION["account_type"]."!" ?></a></li>
                 <?php if($_SESSION["account_type"] == "admin"):?>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="">User
                      <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="../public/view_users.php">View Users</a></li>
                        <li><a href="../public/add_user.php">Add new</a></li>
                      </ul>
                    </li>
                  <?php endif; ?>

                  <li><a href="../public/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>                
                </ul>
              </div>
            </nav>   



    <div class="container-fluid">
        <div class="row ">
          <div class="col-md-3"></div>
          <div class="col-md-6 item_section">


          