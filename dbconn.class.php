<?php
	class DatabaseConnection
	{
		private $hostName = 'localhost';
		private $userName = 'root';
		private $password = '1234';
		private $databaseName = 'usermanagement';
		
		//function that establishes a database connection
		function establishConnection()
		{
			//establishing a database connection
			return $databaseConn = new mysqli($this->hostName,$this->userName,$this->password,$this->databaseName) or die("Connection to the database is lost");
			
			//checking if the connection was successful
			#if(!mysqli_connect_errno())
			#{
		#		die "Database connection was lost.";
	#			
#			}
		}
		
		//a function that accepts, executes, and return a resultset of a query
		function execute($query)
		{
			return $db->query($query);
			
		}
		
	
	}
?>