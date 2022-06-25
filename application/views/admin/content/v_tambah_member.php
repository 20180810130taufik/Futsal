<?php        
$titel   = 'Daftar';
$aksi   = 'tambah';
$button   = 'Daftar';
if(!empty($cari_kode)) {
  if($cari_kode==1) {
    $id_member="M0001";
  } else {
    foreach ($cari_kode as $row):
      $urut = (int) substr($row->id_member,1,4);                    
      $urut++;
      $k = "M";
      $id_member = $k.sprintf("%04s", $urut);                    
    endforeach;
  }
}
    
$nama = '';
$nama_pj = '';
$email = '';
$tanggal = date("Y/m/d");
$alamat = '';   
$nope = '';       
    
if (!empty($member)) { 
  foreach ($member as $row):
    $id = $row->id_member;    
    $nama = $row->nama_tim;        
    $alamat = $row->alamat;
    $nope = $row->nope;
    $tanggal = $row->tanggal;
    $titel   = 'Perbarui';
    $aksi   = 'perbarui';
    $button   = 'Perbarui';
  endforeach;
}
?> 

<div class="content">
  <div class="container-fluid">
    <div class="span9">
      <h3 class="page-title">Daftar Member</h3>
    </div>         
    <div class="card-body table-responsive">
      <form id="user" method="post" action="<?php echo base_url();?>index.php/c_member/<?php echo $aksi; ?>">
        <table class="table table-hover">          
          <input type="hidden" class="form-control" name="id" value="<?php echo $id_member; ?>" readonly>
          <tr><td>
            Nama Tim<br><input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" required>
          </td></tr>
          <tr><td>
            Penanggung Jawab<br><input type="text" class="form-control" name="nama_pj" value="<?php echo $nama_pj; ?>" required>
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
            <button class="btn btn-info" id="simpan" type="submit"><?php echo $button; ?> Member</button>
          </div>
      </form>
    </div>  