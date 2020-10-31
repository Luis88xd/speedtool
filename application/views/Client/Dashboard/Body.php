</!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<title>Analytics | Dashboard</title>

	<?php include ("tags.php"); ?>

</head>

<body>
<section class="dashboard-body">
	<div class="dashboard">
		<div class="row">
			<div class="col-md-3">
				<div class="side_bar">
					<?php include ("sidebar.php"); ?>
				</div>
			</div>
			<div class="col-md-9">
				<div class="container-dash">
					<div class="analytics-body">
						<h1>resultados</h1>
						<div class="row">
							<div class="filters">
								<p>Filtrar por:</p>
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-6">
												<div class="row">
													<div class="col-md-6">
														<select name="" id="">
															<option value="" selected disabled>Selecciona una opción</option>
															<option value="">Últimas 24 horas</option>
															<option value="">Última Semana</option>
															<option value="">Última Quincena</option>
															<option value="">Último mes</option>
														</select>
													</div>
													<div class="col-md-6">
														<input type="date" id="start" name="trip-start" value="<?php echo date("Y-m-d")?>" min="2018-01-01" max="<?php echo date("Y-m-d")?>">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="container-modules">
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-4">
											<div class="back-item black">
												<h1>Analizando la velocidad de carga</h1>
											</div>
										</div>
										<div class="col-md-4">
											<div class="back-item ">
												<h1>Sitio A</h1>
												<p>Última actualización: Hace 20 minutos</p>
												<a href="#" data-toggle="modal" data-target="#detailModal">Ver detalle</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="back-item ">
												<h1>Sitio B</h1>
												<p>Última actualización: Hace 20 minutos</p>
												<a href="#" data-toggle="modal" data-target="#detailModal">Ver detalle</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="chart-body">
									<h1>gráficos</h1>
									<div class="back-chart">
										<canvas id="myChart" width="400" height="400"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Modal editar premio -->
<div class="modal fade modalInfoDataSites" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="data-sites">
					<div class="aDetails-body">
						<h1>Sitio A</h1>
						<h2>Detalle de visitas</h2>
						<div class="detail">
							<div class="row">
								<div class="col-md-6">
									<div class="back-detail-total">
										<span>total</span>
										<h1>150</h1>
									</div>
								</div>
								<div class="col-md-6">
									<div class="back-resume">
										<div class="resume_device">
											<span>50%</span>
											<p>Desktop</p>
										</div>
										<div class="resume_device">
											<span>50%</span>
											<p>Móvil</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$('#analytics').addClass('active-dashboard');
</script>
<script>
	var ctx = document.getElementById('myChart').getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
			datasets: [{
				label: '# of Votes',
				data: [12, 19, 3, 5, 2, 3],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
				],
				borderColor: [
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});
</script>
</body>
</html>

