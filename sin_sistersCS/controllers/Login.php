<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		echo("Login logic");
		/* 	This controller won't have many views associated with it;
			it will mostly be used for authentication, error-handling,
			and user redirection (dep. on successful login, invalid creds, etc).
		*/
	}
	
} // end of Home class
?>