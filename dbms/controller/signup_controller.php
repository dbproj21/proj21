<?php

	// Required OCI class
	include("./config/oracle.php");
	include("./config/dropdownlist.php");
	
	// Initial OCI objects and open connection
	$oracle = new OciHandle;
	$ora_conn = $oracle->connection();
	
	// Dropdownlist
	$deptlist = Dropdownlist::cbs_department($ora_conn);
	$courselist = Dropdownlist::course($ora_conn);
	
	if ( isset( $_SERVER['REQUEST_METHOD'] ) ) {
		
		// Handle HTTP POST method
		if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {
			
			// OCI DML validate user authentication
			$sql = oci_parse($ora_conn, "insert into std_profile(id_code"
			.",firstname"
			.",lastname"
			.",title"
			.",birthdate"
			.",address"
			.",province"
			.",phone_no"
			.",email"
			.",institute_name"
			.",edu_level"
			.",gpa"
			.",registered_date)"
			."	values(:id_code"
			.",:firstname"
			.",:lastname"
			.",:title"
			.",:birthdate"
			.",:address"
			.",:province"
			.",:phone_no"
			.",:email"
			.",:institute_name"
			.",:edu_level"
			.",:gpa"
			.",sysdate)");
			// Populate uuid by time second from system
			list($second, $milli) = explode(".", microtime(true));
			// Date parser
			
			if ( isset($_POST["birthdate"]) ) {
				$birthdate = strtotime( $_POST["birthdate"] );
			} else {
				$birthdate = NULL;
			}
			// Binding parameter into DML
			oci_bind_by_name($sql, ':id_code', $second);
			oci_bind_by_name($sql, ':firstname', iconv("UTF-8","TIS-620", $_POST["firstname"]));
			oci_bind_by_name($sql, ':lastname', iconv("UTF-8","TIS-620", $_POST["lastname"]));
			oci_bind_by_name($sql, ':title', iconv("UTF-8","TIS-620", $_POST["title"]));
			oci_bind_by_name($sql, ':birthdate', $birthdate);
			oci_bind_by_name($sql, ':address', iconv("UTF-8","TIS-620", $_POST["address"]));
			oci_bind_by_name($sql, ':province', iconv("UTF-8","TIS-620", $_POST["province"]));
			oci_bind_by_name($sql, ':phone_no', iconv("UTF-8","TIS-620", $_POST["phone_no"]));
			oci_bind_by_name($sql, ':email', iconv("UTF-8","TIS-620", $_POST["email"]));
			oci_bind_by_name($sql, ':institute_name', iconv("UTF-8","TIS-620", $_POST["institute_name"]));
			oci_bind_by_name($sql, ':edu_level', iconv("UTF-8","TIS-620", $_POST["edu_level"]));
			oci_bind_by_name($sql, ':gpa', iconv("UTF-8","TIS-620", $_POST["gpa"]));
			// Oracle DML execution
			if (oci_execute($sql, OCI_COMMIT_ON_SUCCESS)) {
				$message = "Your registration is success.";
			} else {
				$message = "Your registration is failed, please try again later.";
			}
		}
	}
	
	// OCI disconnect
	$oracle->disconnect();
?>