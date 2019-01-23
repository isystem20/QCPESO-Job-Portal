<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PushNotif extends CI_Model {

    function __construct(){
        parent::__construct();
    }



    function SentJobAlert($recipients,$str,$id) {

		    $content      = array(
		        "en" => "Quezon City Public Employment Service Office\nPosted new job opportunity: \n".$str
		    );
		    $header = array(
		      'en' => "QCPESO Job Alert", 
		    );

		    $num = 0;
		    $filters = array();
		    // print_r($recipients);
		    foreach ($recipients as $row) {
		    	$user = array();
		    	if ($num == 0) {
		    		$user = array("field" => "tag", "key" => "Userid", "relation" => "=", "value" => $row->Id);
		    		array_push($filters, $user);
		    	}else{
		    		$or = array("operator" => "OR");
		    		array_push($filters, $or);
		    		$user = array("field" => "tag", "key" => "Userid", "relation" => "=", "value" => $row->Id);
		    		array_push($filters, $user);
		    	}
		    	$num = $num + 1;
		    }

		    $fields = array(
		        'app_id' => "6a3fac48-55eb-4236-ac2c-31085678326c",
		        // 'included_segments' => array(
		        //     'All'
		        // ),
		        'headings' => $header,
		        // 'filters' => array(
		        //   array("field" => "tag", "key" => "key", "relation" => "=", "value" => "value"),
		        //   // array("operator" => "OR"),
		        //   // array("field" => "amount_spent", "relation" => "=", "value" => "0")
		        // ),
		        'filters' => $filters,
		        'chrome_web_icon' => 'https://qcpeso.com/themes/admin-pro/assets/images/logo-icon.png',
		        'url' => base_url('/web/JobDescription/'.$id.'/#'.$str),
		        'contents' => $content,
		        // 'web_buttons' => $hashes_array
		    );

		    $fields = json_encode($fields);
		    // print("\nJSON sent:\n");
		    // print($fields);
		    
		    $ch = curl_init();
		    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		        'Content-Type: application/json; charset=utf-8',
		        'Authorization: Basic MmJhMGU1NTctMmI3NC00ODMxLWFkZjctMzJiYzgwOTViYjk4'
		    ));
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		    curl_setopt($ch, CURLOPT_HEADER, FALSE);
		    curl_setopt($ch, CURLOPT_POST, TRUE);
		    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		    
		    $response = curl_exec($ch);
		    curl_close($ch);
		    
		    // return $response;


    }


}