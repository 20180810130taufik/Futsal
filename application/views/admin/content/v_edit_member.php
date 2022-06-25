<?php 

if (!empty($member)) { 
    foreach ($member as $row):
        $id = $row->id_member;    
        $nama = $row->nama_tim;
        $pj = $row->nama_pj;                      
        $alamat = $row->alamat;
        $nope = $row->nope;
        $email = $row->email;
        $tanggal = $row->tgl_daftar;
        $titel   = 'Perbarui';
        $aksi   = 'perbarui';
        $button   = 'Perbarui';
    endforeach;
}
?> 
<div class="content">
  <div class="container-fluid">
    <div class="span9">
        <h3><?php echo $titel; ?> Member</h3>
    </div>
    <div class="card-body table-responsive">
      <form id="user" method="post" action="<?php echo base_url();?>index.php/c_member/<?php echo $aksi; ?>">
        <table class="table table-hover">          
          <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>" readonly>
          <tr><td>
            Nama Tim<br><input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" required>
          </td></tr>
          <tr><td>
            Penanggung Jawab<br><input type="text" class="form-control" name="nama_pj" value="<?php echo $pj; ?>" required>
          </td></tr>
          <tr><td>
            Alamat<br><textarea name=alamat class="form-control" cols=20 rows=3 required><?php echo "$alamat"; ?>
            </textarea></td></tr>     
          <tr><td>
            Nomor HP<br><input type="text" class="form-control" name="nope" value="<?php echo $nope; ?>" required>
          </td></tr>
          <tr><td>
            E-mail<br><input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required>
          </td></tr>
          <tr><td>
          Tanggal Daftar<br><input type="text" class="form-control" name="tanggal" value="<?php echo $tanggal; ?>">
          </td></tr>
        </table>
          <div>
            <button class="btn btn-success" id="simpan" type="submit"><?php echo $button; ?> Member</button>
          </div>
      </form>
    </div>  
