<?php 
        
if (!empty($user)) { 
    foreach ($user as $row):
        $id_user = $row->id_user;    
		$nama = $row->nama_user;    
        $username = $row->username;
        $password = $row->password;
        $titel   = 'Perbarui';
        $aksi   = 'perbarui';
        $button   = 'Perbarui';
    endforeach;
}
?> 

<div class="content">
  <div class="container-fluid">    
  <h3><?php echo $titel; ?> user</h3>    
    <div class="card-body table-responsive">
    <form id="user" method="post" action="<?php echo base_url();?>index.php/c_user/<?php echo $aksi; ?>">
      <table class="table table-hover">          
        <input type="hidden" class="form-control" name="id" value="<?php echo $id_user; ?>" readonly>
          <tr><td>        
            Nama user<br><input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" required>
          </td></tr>
          <tr><td>
            Username<br><input type="text" class="form-control" name="username" value="<?php echo $username; ?>" required>
          </td></tr>
          <tr><td>
            Password<br><input type="password" class="form-control" name="password" value="<?php echo $password; ?>" required>
          </td></tr>          
        </table>
          <div>
            <button class="btn btn-success" id="simpan" type="submit"><?php echo $button; ?> user</button>
          </div>
      </form>
    </div>  