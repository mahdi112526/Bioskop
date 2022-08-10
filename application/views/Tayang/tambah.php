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
							<label for='lokasi' > Lokasi</label>
							<select class="form-select" name="lokasi" id='lokasi' class="form-control">	
								<option>Choose....</option>
								<?php foreach ($bioskop_ls as $list) : 
									$kd_bioskop = $list->kd_bioskop;
									echo $kd_bioskop;
								?>
									<option value="<?php echo $kd_bioskop;?> "> <?php echo $list->kd_bioskop?> </option>;
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label for='lokasi' > Film</label>
							<select class="form-select" name="film" id="film">	
								<option>Choose....</option>
								<?php foreach ($film as $list) :
									$tampil = $list->kd_film . " | " . $list->judul_film; 
									$kd_film1 = $list->kd_film; ?>
									<option value=" <?php echo $kd_film1;?>"> <?php echo $tampil;?></option>
								 <?php endforeach; ?>

								 <input type="hidden" name="judul_film" value="<?php echo $list->judul_film;?>">
							</select>
						</div>
						<div class="form-group">
							<label for='tanggal'>Tanggal</label>
							<input type="date" name="tanggal" id="tanggal" class="form-control" required>
						</div>
						<div class="form-group">
							<label for='tanggal'>Jam</label>
							<input type="time" name="jam" id="jam" class="form-control" required>
						</div>
						<div class="form-group">
							<label for='jml_kursi'>Jumlah Kursi</label>
							<input type="text" name="jml_kursi" id="jml_kursi" class="form-control" required>
						</div>
						<br>
						<button type='submit' name='tambah' class="btn btn-primary float-right">Tambah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

