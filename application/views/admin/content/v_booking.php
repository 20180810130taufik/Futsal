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
			<th>Nomor HP</th>
			<th>Lapangan</th>
			<th>Tanggal</th>
			<th>Waktu</th>
			<th>Keterangan (jam)</th>
			<th>Action</th>                                        
		  </tr>
		</thead> 
		<tbody>
		  <?php $no=1; foreach ($booking as $pas){ ?> 
		  <tr>				
			<td><?php echo $no++; ?></td>
			<td><?php echo $pas->nama; ?></td>
			<td><?php echo $pas->nope; ?></td>
			<td><?php echo $pas->lapangan; ?></td>
			<td><?php echo $pas->tanggal; ?></td>
			<td><?php echo $pas->waktu; ?></td>
			<td><?php echo $pas->keterangan; ?></td>
			<td align="center">                                        
		      <a href="<?php echo base_url();?>index.php/page/edit_booking/<?php echo $pas->kd_booking; ?>">
		      	<input type="button" value="Edit" class="btn btn-success"></a>
			  <a href="<?php echo base_url(); ?>index.php/c_booking/delete/<?php echo $pas->kd_booking; ?>" onclick="return confirm('Anda yakin Ingin menghapus Data Booking?')">
			  	<input type="button" value="Hapus" class="btn btn-danger"></a>
			</td>
	  	  </tr>
		  <?php } ?>
		</tbody>
	  </table>
	</div>