<?php 
	$titlepage="ESMU - Admins";
	require "plug/start.php";
	if(isset($_SESSION['admin'])){
		if(isset($_POST['delete-admin'])){
	
			session_unset($_SESSION['admin']);
			session_unset($_SESSION['log-in-counter']);
			session_unset($_SESSION['super']);
	
		}
	}
?>
<!-- SESSION LOGIN IN ISSET -->
<?php if(isset($_SESSION['admin'])): ?>

<body style="background: url(img/leaves-pattern.png);">
<?php require "header.php"; ?>

								<div class="body-container-admin">
									<div class="left-body-container-admin">
										<div class="main-admin-sett">
											<div class="container-main-admin-sett">
												<?php 
													$namesess = $_SESSION['admin'];
													$sqlmain2 = "SELECT * FROM `heroes` WHERE `username` LIKE '%$namesess%'";
													$ressql = mysqli_fetch_array(mysqli_query($db, $sqlmain2));
													$username = $ressql['username'];
													$name = json_decode($ressql['name'])->ua;
												
												echo '<div class="img-main-admin-sett" style="background: url(img/heroes/'.$ressql['photo'].'");">
													<form action="index.php"><label for="file-img-hero-main"><i class="fa fa-file-image-o" aria-hidden="true"></i><input type="file" id="file-img-hero-main"></label></form>
												</div>
												<div class="text-main-admin-sett">';
												
													echo '<h1>'.$name.'</h1>
													<form class="form-hero-main-set">
														<label>Новий Логін</label>
														<input class="inp-username-admin" placeholder="new username..." type="text">
														<label>Новий Пароль</label>
														<input class="inp-pass-admin" placeholder="new password..." type="password">
														<label>Ще раз Пароль</label>
														<input class="inp-pass-admin" placeholder="again password..." type="password">
														<div class="sub-cont-hero-main-sett"><button>ЗБЕРЕГТИ</button></div>
													</form>';
												?>
												</div>
											</div>
										</div>
										<div class="mails-main-block-ad">
											<ul>
												<?php 
													$sql = "SELECT * FROM `mail` ORDER BY `id` DESC";
													$result = mysqli_query($db, $sql);
													$copymails = '';
													$counter = 0;
													$maxcount = 6; 
													$i = $result->num_rows;

													echo "
														<h1>НОВИННІ<br>ПІДПИСКИ</h1>
													";

													if($result){

														while ($row = mysqli_fetch_array($result)){
														
															$copymails .= $row['mail'].', ';

															if($counter<=$maxcount){
																echo "<li>".$i.") ".$row['mail']."</li>";
															}

															$counter++; $i--;

														}

														//delete last comma with space
														$copymails = substr($copymails, 0, -2);

														if($counter>$maxcount+1){
															echo "<li style='font-weight: bold; color: #aeaeae;'>. . .</li>";
														}

													}

													echo "<input type='text' onlyread class='input-hidden-copy-main' id='copy-mail' value='".$copymails."'>";

													echo "
														<div class='but-copy-all-mails'>copy</div>
														<a href='/subs-admin.php' class='but-all-mails'>change</a>
													";
												?>
											</ul>
										</div>
										
										<?php if($_SESSION['super']): ?>
										<div class="admins-admin-block">
											<div class="center-admins-admin-block">
												<div class="text-main-admins-admin-block">ЗМІНИТИ<br>АДМІНІВ</div>
												<ul>
													<?php 
														$sql = "SELECT * FROM `heroes` ORDER BY `id` DESC";
														$result = mysqli_query($db, $sql);
														$i = $result->num_rows;
														$counter = 0;
														$maxcount = 6;


														if($result){

															while ($row = mysqli_fetch_array($result)){

																if($counter<=$maxcount){
																	echo "<li>".$i.") ".$row['username']."</li>";
																}

																$counter++; $i--;

															}

															if($counter>$maxcount+1){
																echo "<li style='font-weight: bold; color: #aeaeae;'>. . .</li>";
															}

														}

														echo "
															<a href='heroes-admin.php' class='admins-sub-ch' style='font-size: 10px;'>CHANGE</a>
														";
													?>
												</ul>
											</div>
										</div>
										<?php endif; ?>
									</div>
									<?php 

										//1st Chart PHP values
										$idate = 1;
										$idate2 = 0;
										while($idate<=7){
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
										$r3 = $count[2];
										$r4 = $count[3];
										$r5 = $count[4];
										$r6 = $count[5];
										$r7 = $count[6];

										//2nd Chart PHP values
									  	$sql_get_all_pr_ch = "SELECT (`title`) FROM `projects` ORDER BY `id` DESC LIMIT 3";
									  	$result_get_all_pr_ch = mysqli_query($db, $sql_get_all_pr_ch);

									  	$row11 = json_decode(mysqli_fetch_array($result_get_all_pr_ch)['title'])->ua;
									  	$row12 = json_decode(mysqli_fetch_array($result_get_all_pr_ch)['title'])->ua;
									  	$row13 = json_decode(mysqli_fetch_array($result_get_all_pr_ch)['title'])->ua;

									  	$sql_get_all_pr_ch2 = "SELECT (`views`) FROM `projects` ORDER BY `id` DESC LIMIT 3";
									  	$result_get_all_pr_ch2 = mysqli_query($db, $sql_get_all_pr_ch2);

									  	$row21 = mysqli_fetch_array($result_get_all_pr_ch2)['views'];
									  	$row22 = mysqli_fetch_array($result_get_all_pr_ch2)['views'];
									  	$row23 = mysqli_fetch_array($result_get_all_pr_ch2)['views'];

									?>
									<div class="right-body-container-admin">
										<div class="chart1">
											<div class="chart-div1">
												<canvas id="myChart"></canvas>
											</div>
										</div>
										<div class="chart2">
											<div class="chart-div2">
												<canvas id="myChart2"></canvas>
											</div>
										</div>
									</div>
								</div>

						</body>


<!-- SESSION LOGIN IN NO-ISSET -->
<?php else: require "error.php"; endif; ?>

<!-- scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
<script type="text/javascript" src="main.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var date = new Date();
  $di=0; $arrayd = [];

  while($di<7){
	$arrayd.push(date.getDate()+'.'+date.getMonth()+'.'+date.getFullYear());
	date.setDate(date.getDate() - 1);
	$di++;
  }

	var chart = new Chart(ctx, {
	    // The type of chart we want to create
	    type: 'line',

	    // The data for our dataset
	    data: {
	        labels: $arrayd.reverse(),
	        datasets: [{
	            label: 'Графік Підписок На ESMU за Тиждень',
	            backgroundColor: '#118167',
	            borderColor: '#0D634F',
	            data: [<?php echo "$r7"; ?>, <?php echo "$r6"; ?>, <?php echo "$r5"; ?>, <?php echo "$r4"; ?>, <?php echo "$r3"; ?>, <?php echo "$r2"; ?>, <?php echo "$r1"; ?>]
	        }]
	    },

	    // Configuration options go here
	    options: {}
	});

  
  var ctx2 = document.getElementById('myChart2').getContext('2d');

	var chart2 = new Chart(ctx2, {
	    // The type of chart we want to create
	    type: 'bar',

	    data: {
	        labels: ["<?php echo $row11;?>", "<?php echo $row12;?>", "<?php echo $row13;?>"],
	        datasets: [{
	            label: 'Графік Переглядів Останніх 3-ох Публікацій',
	            data: ["<?php echo $row21;?>", "<?php echo $row22;?>", "<?php echo $row23;?>"],
	            backgroundColor: [
	                'rgba(255, 99, 132, 0.2)',
	                'rgba(54, 162, 235, 0.2)',
	                'rgba(255, 206, 86, 0.2)'
	            ],
	            borderColor: [
	                'rgba(255, 99, 132, 1)',
	                'rgba(54, 162, 235, 1)',
	                'rgba(255, 206, 86, 1)'
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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>