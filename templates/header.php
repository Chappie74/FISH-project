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
                  <a class="navbar-brand" href="../public/index.php">Dashboard</a>
                </div>
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Home</a></li>

                  
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">Products
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Sell</a></li>
                      <li><a href="#">Buy</a></li>
                      <li><a href="#">Edit</a></li>
                      <li><a href="#">History</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">Inventory
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="../public/view_inventory.php">View Inventory</a></li>
                      <li><a href="#">Update Inventory</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">Supply
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="../public/supply_new.php">Supply a Product</a></li>
                      <li><a href="../public/supply_history.php">View History</a></li>
                    </ul>
                  </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">   
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">User
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Edit Users</a></li>
                      <li><a href="#">Add new</a></li>
                    </ul>
                  </li>

                  <li><a href="../public/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>                
                </ul>
              </div>
            </nav>   



    <div class="container-fluid">
        <div class="row ">
          <div class="col-md-3"></div>
          <div class="col-md-6 item_section">


          