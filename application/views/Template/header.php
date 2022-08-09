<!doctype html>
<html lang="eng">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">

    <title><?php echo $judul;  ?></title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-light">
	  <div class="container">
	    <a class="navbar-brand" href="">Trial Cinema</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav">
	        <a class="nav-link" href="<?php echo base_url(); ?>film">Film</a>
	        <a class="nav-link" href="<?php echo base_url(); ?>lokasi">Lokasi</a>
	        <a class="nav-link" href="<?php echo base_url(); ?>tayang">Tayang</a>
	        <a class="nav-link" href="<?php echo base_url(); ?>reservasi">Reservasi</a>
	      </div>
	      </div>
	    </div>
	  </div>
</nav>