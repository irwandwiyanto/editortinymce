<html>
<title>editor</title>
<head>	
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet"/>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>		
</head>
<body>
<div class="container" style="margin-top:20px;">	
	<div class="row">	
	<div class="panel panel-primary">
		<div class="panel-heading">Create Data</div>
		<div class="panel-body">
			<div class="input-group ">
				<div class="row">
					<div class="col-xs-6 col-sm-3">
						<a href="<?php echo base_url(); ?>alat/add" class="btn btn-success" >
						Create Form</a>
					</div>							
					<div class="col-xs-6 col-sm-1">
					</div>	
				</div>	
			</div>						
			<br>
			<div class="table-responsive">
			   <table class="table table-bordered table-hover table-striped">
					<thead>
						<tr>
							<th><div align="center">No</div></th>
							<th><div align="center">Nama Alat</div></th>
							<th><div align="center">Jenis Alat</div></th>
							<th><div align="center">Keterangan</div></th>	
						</tr>
					</thead>
					<tbody>
						<?php
							$no = 1;
							if ($list_alat == null){
								echo "<div class='alert alert-danger' align='center' role='alert'>Tidak ada data</div>";	
							}
							foreach ($list_alat as $row) {
							?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><a href="<?php echo base_url() ?>alat/detail/<?php echo $row->nama_alat; ?>"><?php echo $row->nama_alat; ?></a></td>
								<td><?php echo $row->jenis_alat; ?></td>
								<td class="fontlogin"><?php echo $row->keterangan; ?></td>
						<?php
							$no++;
							} ?>
							</tr>
					</tbody>
			   </table>
			</div>
		</div>	
	</div>.
</div>	
</body>
</html>	