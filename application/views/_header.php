<html lang="en">

<head>
  <title>Sistem Informasi</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- Material Kit CSS -->
  <link href="<?php echo base_url();?>public/assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />

<body>
<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-brand">Sistem Informasi</div>
          </div>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <font size="3pt" color="grey"><?php echo $_SESSION['nama'];?></font>
                  <i class="icon-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a class="dropdown-item" href="<?php echo base_url();?>index.php/clogin/logout">Logout</a></li>
                </ul>
              </li>              
            </ul>
          </div>
        </div>        
      </nav>

    <div class="content" style="padding: 0px;"><hr>
