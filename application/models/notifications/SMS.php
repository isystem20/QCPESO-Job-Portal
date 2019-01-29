<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SMS extends CI_Model {

    function __construct(){
        parent::__construct();
    }


    function send_sms_single() {

		// Authorisation details.
		$username = "isystem20@gmail.com";
		$hash = "4380240a55fcd6343e2a2e00e064e87e36f9a865332be9cf3b4a28208faee98a";

		// Config variables. Consult http://api.txtlocal.com/docs for more info.
		$test = "0";

		// Data for text message. This is the text message data.
		$sender = "API Test"; // This is who the message appears to be from.
		$numbers = "44777000000"; // A single number or a comma-seperated list of numbers
		$message = "This is a test message from the PHP API script.";
		// 612 chars or less
		// A single number or a comma-seperated list of numbers
		$message = urlencode($message);
		$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
		$ch = curl_init('http://api.txtlocal.com/send/?');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch); // This is the result from the API
		curl_close($ch);

    }



}