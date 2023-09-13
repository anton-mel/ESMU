<?php			


					echo '

						
						<body style="background: #F0F0F3; background: url(../img/leaves-pattern.png);">
						<div class="log-container">
							<a href="../index.php" class="backhome">ПОВЕРНУТИСЯ</a>';

							if($_SESSION['log-in-counter']['count']<3 || !isset($_SESSION['log-in-counter'])){

						    	echo '<form class="login-box" method="POST" action="index.php">
						    		<p>EСМУ</p>
						            <input type="text" name="username" placeholder="Username" autocomplete="off" value="'.$_POST['username'].'" />
						            <input type="password" name="password" placeholder="Password"'; if(isset($_SESSION['admin'])){echo "value='".$_POST['password']."'";} echo '/>';

						        $data = $_POST;
						        $name = R::findOne('heroes', 'username = ?', array($data['username']));
						        if( password_verify($data['password'], $name->password) ){
						         	echo '<input type="submit" class="button expand" style="background: #333 !important;" name="sub-log-form" value="Start!"/>';
						    	}else{
									echo '<input type="submit" class="button expand" name="sub-log-form" value="Log In"/>';
						    	}

						    if(isset($_POST['sub-log-form'])){
								if($_POST['username'] !== ''){
									if($_POST['password'] !== ''){

										$data = $_POST;

											$name = R::findOne('heroes', 'username = ?', array($data['username']));

										    if ( $name ){

										    	if( password_verify($data['password'], $name->password)){

											        //пароль существует
											    	$_SESSION['admin'] = $name->username;
											    	$usernameval = $_SESSION['admin'];
											    	$sql_super_check = "SELECT `superadmin` FROM `heroes` WHERE `username` = '$usernameval'";
											    	$res = mysqli_query($db, $sql_super_check);
											    	$superadmin = mysqli_fetch_array($res)['superadmin'];
											    	$_SESSION['super'] = $superadmin;
											    	echo "<div class='mess-log-in true-log'>Вітаємо, <span style='color: var(--color2) !important;'>".$name->username."!</span></div>";

										    	}else{

										    		if(!isset($_SESSION['log-in-counter'])){
										    			$array = [
														    "count" => 1,
														    "time" => time()
														];
										    			$_SESSION['log-in-counter'] = $array;
											    	}else{
											    		$_SESSION['log-in-counter']['count'] = $_SESSION['log-in-counter']['count'] + 1;

											    		if($_SESSION['log-in-counter']['count'] == 3){
										    				echo "<script>location.reload();</script>";
										    				$_SESSION['log-in-counter']['count'] = $_SESSION['log-in-counter']['count'] + 1;
										    			}
											    	}

										    		echo "<div class='mess-log-in'>Спроба входу зареєстрована - ".$_SESSION['log-in-counter']['count']."</div>";
										    	}

											}else{

												if(!isset($_SESSION['log-in-counter'])){
										    		$array = [
													    "count" => 1,
													    "time" => time()
													];
													$_SESSION['log-in-counter'] = $array;
										    	}else{
										    		$_SESSION['log-in-counter']['count'] = $_SESSION['log-in-counter']['count'] + 1;

										    		if($_SESSION['log-in-counter']['count'] == 3){
										    			echo "<script>location.reload();</script>";
										    			$_SESSION['log-in-counter']['count'] = $_SESSION['log-in-counter']['count'] + 1;
										    		}
										    	}

												echo "<div class='mess-log-in'>Спроба входу зареєстрована - ".$_SESSION['log-in-counter']['count']."</div>";
											}

									}else{
										echo "<div class='mess-log-in'>Введіть, будь ласка, пароль</div>";
									}
								}else{
									echo "<div class='mess-log-in'>Введіть, будь ласка, логін</div>";
								}
							}else{
								echo "<div class='mess-log-in'>Admin Panel &copy; <a href='/index.php' style='color: var(--color2); text-decoration: none !important; margin-left: 2px !important;'>ЕСМУ</a></div>";
							}

						    echo '</form>';

						  }else{

						  	echo "<div class='close-log-in'>Вас було заблоковано, наступна спроба<br>  буде дійсна через 5хв</div>";
						  	
						  	if (time() - $_SESSION['log-in-counter']['time'] > 300){
								session_unset($_SESSION['log-in-counter']);
							}

						  }

						echo '</div>

				

					';


?>