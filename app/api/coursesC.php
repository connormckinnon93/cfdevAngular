<?php
	require_once('config.php');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

	if (isset($_GET['code'])) {
		$output = "";
		
		$sql = "SELECT * FROM admin_courses WHERE code='" . $_GET['code'] . "'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$output .= '{"id":"'. $row['id'] . '",';
		$output .= '"code":"'. $row['code'] . '",';
		$output .= '"name":"'. $row['name'] . '",';
		$output .= '"path":"'. $row['path'] . '",';
		$output .= '"status":"'. $row['status'] . '",';
		$output .= '"reviewForm":"'. $row['reviewForm'] . '",';
		$output .= '"reviewSheet":"'. $row['reviewSheet'] . '",';
		$output .= '"numModules":'. $row['numModules'];
		$output .= "}";
		
		echo ($output);
		
	} else {
		
		$sql = "SELECT * FROM admin_courses WHERE category='business'";
		$result = mysqli_query($db,$sql);
		
		$output = '{ "business": [';

		while ($row = mysqli_fetch_array($result)) {
			$output .= '{"code":"'. $row['code'] . '",';
			$output .= '"name":"'. $row['name'] . '",';
			$output .= '"path":"'. $row['path'] . '",';
			$output .= '"status":"'. $row['status'] . '",';
			$output .= '"reviewForm":"'. $row['reviewForm'] . '",';
			$output .= '"reviewSheet":"'. $row['reviewSheet'] . '",';
			$output .= '"numModules":"'. $row['numModules'] . '"';
			$output .= "},";
		}
		
		$output = substr($output,0,-1);
		$output .= '],';
		
		$output .= '"community": [';
		
		$sql = "SELECT * FROM admin_courses WHERE category='community'";
		$result = mysqli_query($db,$sql);
		
		while ($row = mysqli_fetch_array($result)) {
			$output .= '{"code":"'. $row['code'] . '",';
			$output .= '"name":"'. $row['name'] . '",';
			$output .= '"path":"'. $row['path'] . '",';
			$output .= '"status":"'. $row['status'] . '",';
			$output .= '"reviewForm":"'. $row['reviewForm'] . '",';
			$output .= '"reviewSheet":"'. $row['reviewSheet'] . '",';
			$output .= '"numModules":"'. $row['numModules'] . '"';
			$output .= "},";
		}
		
		$output = substr($output,0,-1);
		$output .= '],';
		
		$output .= '"creative": [';
		
		$sql = "SELECT * FROM admin_courses WHERE category='creative'";
		$result = mysqli_query($db,$sql);
		
		while ($row = mysqli_fetch_array($result)) {
			$output .= '{"code":"'. $row['code'] . '",';
			$output .= '"name":"'. $row['name'] . '",';
			$output .= '"path":"'. $row['path'] . '",';
			$output .= '"status":"'. $row['status'] . '",';
			$output .= '"reviewForm":"'. $row['reviewForm'] . '",';
			$output .= '"reviewSheet":"'. $row['reviewSheet'] . '",';
			$output .= '"numModules":"'. $row['numModules'] . '"';
			$output .= "},";
		}
		
		$output = substr($output,0,-1);
		$output .= '],';
		
		$output .= '"education": [';
		
		$sql = "SELECT * FROM admin_courses WHERE category='education'";
		$result = mysqli_query($db,$sql);
		
		while ($row = mysqli_fetch_array($result)) {
			$output .= '{"code":"'. $row['code'] . '",';
			$output .= '"name":"'. $row['name'] . '",';
			$output .= '"path":"'. $row['path'] . '",';
			$output .= '"status":"'. $row['status'] . '",';
			$output .= '"reviewForm":"'. $row['reviewForm'] . '",';
			$output .= '"reviewSheet":"'. $row['reviewSheet'] . '",';
			$output .= '"numModules":"'. $row['numModules'] . '"';
			$output .= "},";
		}
		
		$output = substr($output,0,-1);
		$output .= '],';
		
		$output .= '"environment": [';
		
		$sql = "SELECT * FROM admin_courses WHERE category='environment'";
		$result = mysqli_query($db,$sql);
		
		while ($row = mysqli_fetch_array($result)) {
			$output .= '{"code":"'. $row['code'] . '",';
			$output .= '"name":"'. $row['name'] . '",';
			$output .= '"path":"'. $row['path'] . '",';
			$output .= '"status":"'. $row['status'] . '",';
			$output .= '"reviewForm":"'. $row['reviewForm'] . '",';
			$output .= '"reviewSheet":"'. $row['reviewSheet'] . '",';
			$output .= '"numModules":"'. $row['numModules'] . '"';
			$output .= "},";
		}
		
		$output = substr($output,0,-1);
		$output .= '],';
		
		$output .= '"humanities": [';
		
		$sql = "SELECT * FROM admin_courses WHERE category='humanities'";
		$result = mysqli_query($db,$sql);
		
		while ($row = mysqli_fetch_array($result)) {
			$output .= '{"code":"'. $row['code'] . '",';
			$output .= '"name":"'. $row['name'] . '",';
			$output .= '"path":"'. $row['path'] . '",';
			$output .= '"status":"'. $row['status'] . '",';
			$output .= '"reviewForm":"'. $row['reviewForm'] . '",';
			$output .= '"reviewSheet":"'. $row['reviewSheet'] . '",';
			$output .= '"numModules":"'. $row['numModules'] . '"';
			$output .= "},";
		}
		
		$output = substr($output,0,-1);
		$output .= '],';
		
		$output .= '"technology": [';
		
		$sql = "SELECT * FROM admin_courses WHERE category='technology'";
		$result = mysqli_query($db,$sql);
		
		while ($row = mysqli_fetch_array($result)) {
			$output .= '{"code":"'. $row['code'] . '",';
			$output .= '"name":"'. $row['name'] . '",';
			$output .= '"path":"'. $row['path'] . '",';
			$output .= '"status":"'. $row['status'] . '",';
			$output .= '"reviewForm":"'. $row['reviewForm'] . '",';
			$output .= '"reviewSheet":"'. $row['reviewSheet'] . '",';
			$output .= '"numModules":"'. $row['numModules'] . '"';
			$output .= "},";
		}
		
		$output = substr($output,0,-1);
		$output .= '],';;
		
		$output .= '"degree": [';
		
		$sql = "SELECT * FROM admin_courses WHERE category='degree'";
		$result = mysqli_query($db,$sql);
		
		while ($row = mysqli_fetch_array($result)) {
			$output .= '{"code":"'. $row['code'] . '",';
			$output .= '"name":"'. $row['name'] . '",';
			$output .= '"path":"'. $row['path'] . '",';
			$output .= '"status":"'. $row['status'] . '",';
			$output .= '"reviewForm":"'. $row['reviewForm'] . '",';
			$output .= '"reviewSheet":"'. $row['reviewSheet'] . '",';
			$output .= '"numModules":"'. $row['numModules'] . '"';
			$output .= "},";
		}
		
		$output = substr($output,0,-1);
		$output .= ']}';;

		echo ($output);
	}
	mysqli_close($db);
?>