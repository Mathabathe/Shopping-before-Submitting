<?php
	class User
	{
		private $uName;
		private $eMail; 
		private $actualPass;
		
		//constructor that initializes the instance variables
		function User($uName,$eMail)
		{
			$this->uName = $uName;
			$this->eMail = $eMail;
		}
		
		
		//this password encripts the actual users 
		function setPassword($actualPass)
		{
			$this->actualPass = md5($actualPass);
		}
		
		function displayUserInfo()
		{
			
			return "Username : ".$this->uName."<br/>"."Email address : ".$this->eMail;
			
		}
		
	}
?>