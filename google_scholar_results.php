<?php
		include ('../CHIPv4/pop_up_window_css.css');
		include ('chip_db_connection.php');
		$search_term = (isset($_GET['search_term']) ? $_GET['search_term'] : null);
		$query = "select * from gs_chip where last_name = '" . $search_term . "'";
		$result = mysql_query($query);
	
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
			echo $row['title'];
			echo "<br>";
			echo $row['author_journal'];
			echo "<br><br>";
		}
?> 
