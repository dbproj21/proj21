<html>
	<head>
		<meta charset="utf-8">
		<title>DBMS PHP application</title>
	</head>
	<body>
		<p>
			<h3>Hello, Malipen</h3>
			<?php
				list($seconds, $milli) = explode(".", microtime(true));
			?>
			<p>UNIQUD : <?=$seconds?></p>
			<?php
			putenv("NLS_LANG=AMERICAN_AMERICA.TH8TISASCII");
			// Create connection to Oracle
			$conn = oci_connect("dbm", "dbmit21", "//10.211.55.4/mis");
			if ( !$conn ) {
			   	$m = oci_error();
			   	echo $m['message'], "\n";
			   	exit;
			} else {
			   	//print "Connected to Oracle MIS";
				//$stmt = oci_parse($conn, 'select sysdate as now from dual');
				$stmt = oci_parse($conn, 'select username from user_login');
				oci_execute($stmt);
				
				while(oci_fetch($stmt)) {
			?>
					<div>Time from Oracle is <?=iconv("TIS-620","UTF-8", oci_result($stmt, 'USERNAME'))?> </div>
			<?php
				}
			}
			// Close the Oracle connection
			oci_close($conn);
			?>
		</p>
	</body>
</html>