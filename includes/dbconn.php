<?php
	$whConn = null;
	
	// This is the name of the MySQL EVE database dump.  The user MYSQLUSER will need SELECT permissions to view it
	const EVEDB_NAME = 'evedb_inf11';
	const WHDB_NAME = 'whdata';
	
	function db_open() {
		global $whConn;
		// Note: Apache presents $_ENV as $_SERVER instead (annoying)
		$whConn = mysqli_connect('localhost', 'wormholes', 'password', EVEDB_NAME);
		if( $whConn === FALSE ) {  die('mysql connection error: '.mysql_error()); }
	}
	
	function db_close() {
		global $whConn;
		
		if (!empty($whConn))
			mysqli_close($whConn);
	}
?>