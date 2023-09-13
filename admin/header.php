<div class="header-admin">
								
	<ul>
		<li><a href="index.php">адмін панель</a></li>
		<li><a href="admin-projects.php">проєкти</a></li>
		<li><a href="subs-admin.php">підписки</a></li>
		<li><a href="../index.php" onclick="saveText();"><i style="font-size: 15px; margin-right: 3px;" class="fa fa-cog" aria-hidden="true"></i> редагувати сайт</a></li>
	</ul>

	<form method="POST" action="index.php">
		<p>Вітаємо, <?php print_r($_SESSION['admin']); ?>!</p>
		<input type="submit" class="exit-session" name="delete-admin" value="Вийти?"/>
	</form>
								
</div>