<?php require "db.php"; ?>
<?php require 'config.php'; ?>

<?php 

	$data = $_POST;

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>ESMU - Admin Panel Subscribers</title>
				
		<!-- styles -->
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="animate.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css" integrity="sha512-fxF1t7b0mpb/ytjBeSu/OpgXxCVcX5/O8AJGYvHaWmNfi/lYLtttitFK17K4iKBva4iU9dcZ+BIV7dyD/nDdSw==" crossorigin="anonymous" />
				<link rel="stylesheet" type="text/css" href="Gilroy/stylesheet.css">
	</head>

			<?php

				if(isset($_SESSION['admin'])){

			?>

					<body style="background: url(img/leaves-pattern.png);">

							<div class="header-admin">
								
								<ul>
									<li><a href="/admin.php">адмін панель</a></li>
									<li><a href="/admin-projects.php">проєкти</a></li>
									<li><a href="/subs-admin.php">підписки</a></li>
									<li><a href="/index.php" onclick="saveText();"><i style="font-size: 15px; margin-right: 3px;" class="fa fa-cog" aria-hidden="true"></i> редагувати сайт</a></li>
								</ul>

								<form method="POST" action="/admin.php">
									<p>Вітаємо, <?php print_r($_SESSION['admin']); ?>!</p>
						      		<input type="submit" class="exit-session" name="delete-admin" value="Вийти?"/>
								</form>
								
							</div>

							<div class="body-container-admin">

								<div class="projects-body-container-admin">
									<div class="tools-projects-admin">
										
										<form class="search-admin-project-form" action="subs-admin.php" method="POST">
											<button type="submit" name="sub-admin-subs-search"><i class="fa fa-search" aria-hidden="true" style="margin-right: 3px;"></i>ПОШУК</button>
											<input type="text" autocomplete="off" class="input-search-admin-project-form" placeholder="Введіть назву пошти..." name="search-admin-sub">
										</form>
										<form class="add-admin-project" method="post" action="subs-admin.php">
											<button type="submit" name="addsub"><i class="fa fa-plus" style="margin-right: 3px;" aria-hidden="true"></i>ДОДАТИ ПІДПИСКУ</button>
										</form>

									</div>
									<div class="table-admin-projects2">

										<div class="cont-table-admin-projects1">

											<?php 
												if(isset($data['sub-admin-subs-search'])){
													$tits = $data['search-admin-sub'];
													$sql = "SELECT * FROM `mail` WHERE `mail` LIKE '%$tits%'";
												}else{
													$sql = "SELECT * FROM `mail` ORDER BY `id` DESC";
												}

												$callrows = "SELECT * FROM `mail`";
												$countallrows = mysqli_query($db, $callrows)->num_rows;
												$result_rows = mysqli_query($db, $sql);

												echo '<p class="search-echo-count">Знайдено '.$result_rows->num_rows.' із '.$countallrows.' підписок </p>';
											?>


											<table class="pad-bot-list-s">

												<!-- //titles -->
												<tr>
													<th>id</th>
													<th>Пошта</th>
													<th>Дата</th>
													<th>змінити</th>
													<th>Видалити</th>
												</tr>

												<!-- //body table -->
												<tbody class="pag-list-subs">
													<?php 

														$result = mysqli_query($db, $sql);

														if($result){
															while ($row = mysqli_fetch_array($result)){
																echo "

																	<tr>
																		<td>".$row['id']."</td>
																		<td wrap>".$row['mail']."</td>
																		<td>".$row['date']."</td>
																		<td class='form-change-project-admin2'>
																			<form action='subs-admin.php/".$row['id']."' method='post'>
																				<input type='hidden' name='xid' value='".$row['id']."'>
																				<button type='submit'>змінити #".$row['id']."</button>
																			</form>
																		</td>
																		<td class='form-delete-project-admin2'>
																			<form method='post' action='subs-admin.php'>
																				<input type='hidden' name='hididdeletesub' value='".$row['id']."'>
																				<button type='submit' name='deletesub'>видалити #".$row['id']."</button>
																			</form>
																		</td>
																	</tr>

																";

															}
														}

													?>
												</tbody>

											</table>
										</div>
										<?php 

											//2.1st Chart PHP values
											$idate = 1;
											$idate2 = 0;
											while($idate<=2){
												$date[$idate2] = date("d.m.Y", time() - 60 * 60 * 24 * $idate2);
												$sql_get_all_mails_ch = "SELECT * FROM `mail` WHERE `date` LIKE '%$date[$idate2]%'";
											  	$result_get_all_mails_ch = mysqli_query($db, $sql_get_all_mails_ch);
											  	$count[$idate2] = 0;
											  	while (mysqli_fetch_array($result_get_all_mails_ch)) {
											  		$count[$idate2]++;
											  	}
											  	$idate++; $idate2++;
											}

											$r1 = $count[0];
											$r2 = $count[1];

										?>

										<div class="cont-table-admin-projects2">
											<div class="chart21">
												<canvas id="myChart21"></canvas>
											</div>
											<div class="chart22">
												<canvas id="myChart22"></canvas>
											</div>
										</div>

									</div>
								</div>

							</div>

				



						<!-- scripts -->
						<script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
						<script type="text/javascript" src="main.js"></script>
						<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
						<script src="/paginathing-master/paginathing.js"></script>
						<script type="text/javascript">
							jQuery(document).ready(function($){
								$('.pag-list-subs').paginathing({
							    		  perPage: 10,
							    		  firstText: 'ПЕРШЕ',
							    		  lastText: 'ОСТАННЄ',
							    		  disabledClass: 'pag-disabled',
							    		  liClass: 'pag-li3',
							    		  activeClass: 'pag-active',
							    		  containerClass: 'pag-container3', // extend default container class
										  ulClass: 'pag-ul',
										  limitPagination: false,
										  prevText: '<i class="fa fa-caret-left" aria-hidden="true"></i>', // Previous button text
										  nextText: '<i class="fa fa-caret-right" aria-hidden="true"></i>', // Next button text
										  prevNext: true, // enable previous and next button
										  firstLast: false, // enable first and last button
								});
							});
						</script>
						<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
						<script>
							$ni=0;

						  var ctx = document.getElementById('myChart21').getContext('2d');

							var chart = new Chart(ctx, {
							    // The type of chart we want to create
							    type: 'bar',

							    data: {
							        labels: [(1+2*$ni)+' days ago'],
							        datasets: [{
							            label: ['Графік Підписок за'],
							            data: ["20"],
							            backgroundColor: [
							                'rgba(255, 99, 132, 0.2)'
							            ],
							            borderColor: [
							                'rgba(255, 99, 132, 1)'
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

						  
						  var ctx2 = document.getElementById('myChart22').getContext('2d');

							var chart2 = new Chart(ctx2, {
							    // The type of chart we want to create
							    type: 'bar',

							    data: {
							        labels: [(2+2*$ni)+' days ago'],
							        datasets: [{
							            label: ['Графік Підписок за'],
							            data: ["45"],
							            backgroundColor: [
							                'rgba(255, 99, 132, 0.2)'
							            ],
							            borderColor: [
							                'rgba(255, 99, 132, 1)'
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
						<script>
						  AOS.init();
						</script>
					</body>

			<?php 
				}else{

					require "error.php";

				}
			?>


</html>