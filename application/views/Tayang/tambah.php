<br>
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<div class="card">
				<div class="card-header">
					<h3>Jadwal Tayang Baru</h3>
				</div>
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group">
							<label for='kode_bioskop'>Kode Bioskop</label>
							<div class="input-group-prepend">
						    <label class="input-group-text" for="inputGroupSelect01">Options</label>
						  </div>
						  <select class="custom-select" id="inputGroupSelect01">
						    <option selected>Choose...</option>
						   	<?php 
						   		foreach ($Lokasi as $kode_bioskop) :
						   	?>		
						   		<option value='<?php echo $kode_bioskop;?>'>One</option>	
						   	<?php
						   		endforeach;
						   	?>
						  </select>
						</div>
						<div class="form-group">
							<label for='nama_bioskop'>Nama Bioskop</label>
							<input type="text" name="nama_bioskop" id="nama_bioskop" class="form-control" required>
						</div>
						<div class="form-group">
							<label for='alamat'>Alamat Bioskop</label>
							<input type="text" name="alamat" id="alamat" class="form-control" required>
						</div>
						<div class="form-group">
							<label for='kota'>Kota</label>
							<input type="text" name="kota" id="kota" class="form-control" required>
						</div>
						<br>
						<button type='submit' name='tambah' class="btn btn-primary float-right">Tambah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

