<?php

	foreach ($kd_film as $key) :
		$Kode_film = $key->kd_film;
		$Judul_film = $key->judul_film;
		$Tgl_launching1 = $key->tgl_launch;
		$Tgl_launching = date_format(date_create($Tgl_launching1),'d M Y');
		$Synopsis = $key->synopsis;
	endforeach ;
 ?>

 <br>

 <div class="container">
 	<div class="row">
 		<div class="col-md-5">
 			
 		</div>
 		<div class="col-md-2">
 			<img src="https://www.pngitem.com/pimgs/m/110-1108543_transparent-blank-png-blank-poster-png-png-download.png" class="img-thumbnail" height="100">
 		</div>
 		<div class="col-md-5">
 			
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-md-12 text-center">
 			<h4><?php echo $Kode_film;?></h4>
 		</div>
 	</div>
 	<br>
 	<div class="row">
 		<div class="col-md-12">
 			<h2 class="text-center"><?php echo $Judul_film;?></h2>
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-md-12">
 			Sinopsis : <br>
 			<b><?php echo $Judul_film;?></b> di-<i>launcing</i> pada <?php echo $Tgl_launching; ?> <br>
 			Berkisah tentang <?php echo $Synopsis; ?>
 		</div>
 	</div>
 </div>