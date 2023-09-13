





<?php

	$array_lang = array('?lang=ua','?lang=en');

	echo '<a href="'; echo str_replace($array_lang, '', $_SERVER['REQUEST_URI']); echo '?lang=en">EN</a>';

	echo '<a href="'; echo str_replace($array_lang, '', $_SERVER['REQUEST_URI']); echo '?lang=ua">UA</a>';

?>