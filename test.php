<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cek</title>
</head>
<body>

	<?php





		error_reporting(0);
		include 'koneksi.php';

		$sql = 'select distinct(nama) from compare';
		$data = mysqli_query($koneksi,$sql);

		while($hasil = mysqli_fetch_assoc($data)){
			echo $hasil('nama');
		}
		
		// $bulan = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29);
		// $data[1] = array(1,5,7,10,11,29);
		// $nilai[1] = array(19,21,12,15,12,29);
		// $data[2] = array(1,4,8);
		// $nilai[2] = array(19,12,15);
		// $data[3] = array(2,8,9,29);
		// $nilai[3] = array(100,14,25,29);
		// $data[11] = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29);
		// $nilai[11] = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29);

		$colori = array('#ffffff','#eb4034','#c0c0c0','#a0a0a0','#ebc334','#d3eb34','#9ceb34','#3deb34','#34ebab','#34c9eb','#348feb','#3446eb');

		for ($i=1; $i <= 11 ; $i++) { 
			$a = -1;
			$b = 0;

			$cetak .= " {label : 'Data $i' , data : [";

			do {
				$a++;
				$bulan_cek = $bulan[$a];
				if($bulan_cek == $data[$i][$b]){
					$cetak .= $nilai[$i][$b] . ",";
					$b++;
				}
				else{
					$cetak .= "0,";
				}
			}while ($a <= count($bulan));
			$cetak .= "], backgroundColor: '$colori[$i]'},";
			//$cetak .= "<br>";
		}

		// echo $cetak;
		$label = "'1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40' ";

	?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
	<canvas id="ctx" width="1280" height="400"></canvas>


	<script language="javascript">
		var chart = new Chart(ctx, {
   type: 'bar',
   data: {
      labels: [<?php echo $label;?>], // responsible for how many bars are gonna show on the chart
      // create 12 datasets, since we have 12 items
      // data[0] = labels[0] (data for first bar - 'Standing costs') | data[1] = labels[1] (data for second bar - 'Running costs')
      // put 0, if there is no data for the particular bar
      datasets: [ 
      <?php echo $cetak;?>
      ]
   },
		   options: {
		      responsive: true,
		      legend: {
		         position: 'right' // place legend on the right side of chart
		      },
		      scales: {
		         xAxes: [{
		            stacked: true // this should be set to make the bars stacked
		         }],
		         yAxes: [{
		            stacked: true // this also..
		         }]
		      }
		   }
		});
	</script>

	






</body>
</html>