<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>public/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url();?>public/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Futsal Mang| Daftar User
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url();?>public/assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url();?>public/assets/demo/demo.css" rel="stylesheet" />
</head>

<body>
  <div class="content">
    <div class="container-fluid">
      <div class="bg-card">
        <div class="container">
          <div class="card">
            <div class="card-header card-header-primary" align="center">
              <h4 class="card-title">Daftar User</h4>
               <p class="card-category">Futsal Mang</p>                          
            </div>
            <div class="card-body">
              <form method="post" action="<?php echo base_url();?>index.php/c_user/tambah">
                <div>                  
                  <input type="hidden" name="id_user" class="form-control">
                </div>
                <div>
                  <label class="bmd-label-floating">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control">
                </div>
                  <input type="hidden" name="role" class="form-control" value="user">
                <div>                  
                  <label class="bmd-label-floating">Username</label>
                  <input type="text" name="username" class="form-control">
                </div>
                <div>    
                  <label class="bmd-label-floating">Password</label>
                  <input type="password" name="password" class="form-control">
                </div>
                <center>                  
                  <br><button type="submit" class="btn btn-primary pull-right">Daftar</button><br>
                  <span>Sudah punya akun? <a href="<?php echo base_url();?>">Login</a>
                </center>
              </form>
            </div>
          </div>
        </div>

  </body>
</html>



