<?php
session_start();
//error_reporting(0);

require 'functions/general.php';
require 'database/connect.php';
require 'functions/users.php';

if (logged_in() === true) {
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 'user_id', 'username', 'firstname', 'lastname', 'email', 'address', 'phone_number', 'deposit_account_no', 'credit_card_no', 'expiration_date', 'cvv');	
	}
	
	



$errors = array();
?>