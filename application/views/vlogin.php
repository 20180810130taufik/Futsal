<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>public/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url();?>public/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Futsal Mang | Login Admin
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
            <div class="card-header card-header-info" style="background: #blue;" align="center">
              <h3 class="card-title">Silahkan Login</h3>
               <p class="card-category">Futsal Mang</p>                          
            </div>
            <div class="card-body">
              <form method="post" action="<?php echo base_url();?>index.php/clogin/masuk" id="loginform" class="form">
                <div>
                  <br>Username:<br>
                  <input type="text" class="form-control" id="username" name="username">
                  <div class="form-border"></div>
                </div>
                <div>
                  <br>Password:<br>
                  <input type="password" class="form-control" id="password" name="password">
                  <div class="form-border"></div><br>
                </div>
                <?php echo "<center style='color:red'>".$error; ?><br>
                <input type="submit" class="btn btn-info"  name="submit" value="LOGIN"><br>
                <p class="card-category">Belum punya akun? <a href="<?php echo base_url();?>index.php/clogin/register">Daftar.</a></p>
                </center>
              </form>
            </div>
          </div>  
        </div>
      </div>
    </div>
  </div>

</body>
</html>



