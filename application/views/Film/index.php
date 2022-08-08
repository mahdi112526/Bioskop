
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1>Sedang Tayang Sekarang</h1>
		</div>
	</div>
	<div class="row">
			<?php foreach ($Film as $list ) :  ?>
			<div class="col-md-2">
				<?php echo $list['judul_film'] ?>
			</div>	
			<?php endforeach;  ?>
	</div>
</div>