<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chart page!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<div style="width:800px; height: 300px;">
  <canvas id="myChart"></canvas>
</div>

<div>
	<?php 
	if($deposits):
		foreach($deposits as $depo):
			//echo "<p>".$depo['month_name']." in ".$depo['amount']."</p>";
			$month[]  = $depo['month_name'];
			$amount[] = $depo['amount'];
		endforeach;
	endif;
   	?>
</div>

<!-- SCRIPTS -->
<script>

  // const labels = ['January', 'February', 'March', 'April', 'May', 'June', ];
  const labels = <?php echo json_encode($month) ?>

  const data = {
    labels: labels,
    datasets: [{
      label: 'My First dataset',
      backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],
      /*data: [0, 10, 5, 2, 20, 30, 45],*/ // Static data replace
      data: <?php echo json_encode($amount) ?>
    }]
  };

  const config = {
    type: 'pie',
    data: data,
    options: {}
  };

  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );

</script>
<!--END SCRIPTS -->

</body>
</html>
