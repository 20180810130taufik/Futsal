<?php 
      
if (!empty($booking)) { 
    foreach ($booking as $row):
        $kode = $row->kd_booking;    
        $nama = $row->nama;    
        $nope = $row->nope;    
        $lap = $row->lapangan;
        $tanggal = $row->tanggal;
        $waktu = $row->waktu;
        $ket = $row->keterangan;
        $titel   = 'Perbarui';
        $aksi   = 'perbarui';
        $button   = 'Perbarui';
    endforeach;
}
?> 
<div class="content">
  <div class="container-fluid">
    <h3><?php echo $titel; ?> Booking</h3>
    <div class="card-body table-responsive">
      <form id="user" method="post" action="<?php echo base_url();?>index.php/c_booking/<?php echo $aksi; ?>">
        <table class="table table-hover">  
          <input type="hidden" id="kode" name="kode" value="<?php echo $kode; ?>" readonly>
          <tr><td>
            Nama<br>
            <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" required></td></tr>
          <tr><td>
            Nomor HP<br>
            <input type="text" class="form-control" name="nope" value="<?php echo $nope; ?>" required></td></tr>
          <tr><td>
            Lapangan<br>
            <select class="form-control" name="lapangan" required>
              <option value="">--- PILIH LAPANGAN ---</option>
              <option value="Vinyl">Vinyl</option>
              <option value="Rumput Sintetis">Rumput Sintetis</option>
            </select></td></tr>
          <tr><td>
            Tanggal<br>
            <input type="text" class="form-control" name="tanggal" value="<?php echo $tanggal; ?>" required></td></tr>
          <tr><td>
            Pukul<br>
            <input type="text" class="form-control" name="waktu" value="<?php echo $waktu; ?>" required></td></tr>
          <tr><td>
            Keterangan (jam)<br>
            <input type="text" class="form-control" name="ket" value="<?php echo $ket; ?>" required></td></tr>
        </table>
          <div style="padding-top:20px">
            <button class="btn btn-success" id="simpan" type="submit"><?php echo $button; ?> Booking</button>
         </div>
      </form>
    </div>  