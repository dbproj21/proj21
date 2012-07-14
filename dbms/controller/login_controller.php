<?php

	// Required OCI class
	include("./config/oracle.php");
	
	if ( isset( $_SERVER['REQUEST_METHOD'] ) ) {
		
		// Handle HTTP POST method
		if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {
			
			$username = $_POST["username"];
			$password = $_POST["password"];
			
			// Initial OCI objects and open connection
			$oracle = new OciHandle;
			$ora_conn = $oracle->connection();
			
			// OCI connection validation
			if ( !$ora_conn ) {
				$error = oci_error();
			} else {
				
				// OCI DML validate user authentication
				$sql = oci_parse($ora_conn, "select id_code,username from user_login where username=:uname and passwd=:pass");
				oci_bind_by_name($sql, ':uname', iconv("UTF-8","TIS-620", $username));
				oci_bind_by_name($sql, ':pass', iconv("UTF-8","TIS-620", $password));
				oci_execute($sql, OCI_COMMIT_ON_SUCCESS);
				
				while(oci_fetch($sql)) {
					$id_code = oci_result($sql, "ID_CODE");
				}
				
				if ( isset( $id_code ) ) {
					// Keep user information on HTTP session
					$_SESSION['id_code'] = $id_code;
					$_SESSION['username'] = $username;
					
					// OCI DML update last login of this user
					$dml = oci_parse($ora_conn, 'update user_login set last_login=sysdate where id_code=:idcode');
					oci_bind_by_name($dml, ':idcode', $id_code);
					oci_execute($dml, OCI_COMMIT_ON_SUCCESS);
					
					header( "Location: index.php" );
				} else {
					$error = "Your username is not exist in system!";
				}
				
				// OCI disconnect
				$oracle->disconnect();
			}
		}
	}
?>