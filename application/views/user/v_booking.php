<div class="content">
  <div class="container-fluid">
    <h3>Data Booking</h3>
  <div class="btn-toolbar"> 
    <a style="color:white" href="<?php echo base_url();?>index.php/page/tambah_booking">
    <input type="button" value="Booking" class="btn btn-info"></a>
  </div>
    <div class="card-body table-responsive">
      <table class="table table-hover">
        <thead>
          <tr bgcolor="#CCCCCC">
            <th>No.</th>
            <th>Nama</th>
            <th>Lapangan</th>
            <th>Tanggal</th>
            <th>Pukul </th>
            <th>Keterangan (jam)</th>          
          </tr>
        </thead> 
        <tbody>
          <?php $no=1 ; foreach ($booking as $pas){ ?> 
        <tr>        
          <td><?php echo $no++; ?></td>
          <td><?php echo $pas->nama; ?></td>
          <td><?php echo $pas->lapangan; ?></td>
          <td><?php echo $pas->tanggal; ?></td>
          <td><?php echo $pas->waktu; ?></td>
          <td><?php echo $pas->keterangan; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  <i style="font-size: 11pt; color: red;">*) Biaya sewa lapangan Rp.110.000/jam.</i>
</div>