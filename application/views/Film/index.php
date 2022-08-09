<br>
<div class="container">
	
	<div class="row">
		<div class="col-md-6">
			<a href="<?php echo base_url();?>film/Tambah" class="btn btn-primary">Tambah Koleksi Film</a>
		</div>
	</div>
	<br>

	<div class="row">
		<?php foreach ($Film as $list ) :  ?>
			<div class="col-md-2">
				<img src="https://www.pngitem.com/pimgs/m/110-1108543_transparent-blank-png-blank-poster-png-png-download.png" class="img-thumbnail">
				<?php echo $list['judul_film'] ?>
			</div>	
		<?php endforeach;  ?>
	</div>
</div>