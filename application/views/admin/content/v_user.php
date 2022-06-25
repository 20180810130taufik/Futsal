<div class="content">
  <div class="container-fluid">	
    <h3>Data User</h3>    
	<div class="card-body table-responsive">
		<table class="table table-hover">
			<thead>
				<tr bgcolor="#CCCCCC">
					<th>ID</th>
					<th>Nama</th>
					<th>Username</th>
					<th>Password</th>
					<th>Action</th>                                        
				</tr>
			</thead> 
			<tbody>
				<?php foreach ($user as $us){ ?> 
				<tr>				
					<td><?php echo $us->id_user; ?></td>
					<td><?php echo $us->nama_user; ?></td>
					<td><?php echo $us->username; ?></td>
					<td><?php echo $us->password; ?></td>
					<td align="center">
					<a href="<?php echo base_url();?>index.php/page/edit_user/<?php echo $us->id_user; ?>">
						<input type="button" value="Edit" class="btn btn-success"></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>