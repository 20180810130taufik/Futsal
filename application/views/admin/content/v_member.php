<div class="content">
  <div class="container-fluid">
	<h3>Data Member</h3>
	<div class="btn-toolbar">	
	  <a style="color:white" href="<?php echo base_url();?>index.php/page/tambah_member">
      <input type="button" value="Daftar Member" class="btn btn-info"></a>
	</div>

	<div class="card-body table-responsive">
	  <table class="table table-hover">
		<thead>
		  <tr bgcolor="#CCCCCC">
		  	<th>No.</th>
		  	<th>Nama Tim</th>
		  	<th>Penanggung Jawab</th>
		  	<th>Alamat</th>
		  	<th>Nomor HP</th>
		  	<th>Email</th>
		  	<th>Action</th>                                        
		  </tr>
		</thead> 
		<tbody>
			<?php $no=1; foreach ($member as $row){ ?> 
				<tr>				
					<td><?php echo $no++; ?></td>
					<td><?php echo $row->nama_tim; ?></td>
					<td><?php echo $row->nama_pj; ?></td>
					<td><?php echo $row->alamat; ?></td>
					<td><?php echo $row->nope; ?></td>
					<td><?php echo $row->email; ?></td>
					<td align="center">
						<a href="<?php echo base_url();?>index.php/page/edit_member/<?php echo $row->id_member; ?>">
						  <input type="button" value="Edit" class="btn btn-success"></a>
						<a href="<?php echo base_url(); ?>index.php/c_member/delete/<?php echo $row->id_member; ?>" onclick="return confirm('Anda yakin Ingin menghapus Data Member?')">
						  <input type="button" value="Hapus" class="btn btn-danger"></a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	  </table>
	</div>