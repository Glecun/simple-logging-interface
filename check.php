<?php
	if(htmlspecialchars($_GET["mdp"]=="[YOUR_PASSWORD]")){ 
		session_start();
		$_SESSION['connected']=1;
		echo json_encode($_SESSION['previous']);
	} else {
		sleep(1);
		echo json_encode('0');
	}
?>