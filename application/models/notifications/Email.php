<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Model {

    function __construct(){
        parent::__construct();
    }



	public function send_email_verification_code($code,$data) {

		$this->load->helper('file');
		$this->config->load('email', TRUE);
		$this->load->library('mailer');

		$variables = array();

        $key = $this->config->item('encryption_key');
        $salt1 = hash('sha512', $key . $code);
        $salt2 = hash('sha512', $code . $key);
        $hashed_code = hash('sha512', $salt1 . $code . $salt2);
		$variables['code'] = $code;
		$variables['firstname'] = $data['r_fname'];
		$variables['activationlink'] = base_url('activate/'.$data['userid'].'/'.$hashed_code);

		$template = read_file(APPPATH.'templates/email/send_verification_code/send_verification_code.html');

		foreach($variables as $key => $value)
		{
		    $template = str_replace('{{'.$key.'}}', $value, $template);
		}
		try {

			$recipient_email = $data['r_email'];
			$recipient_name = $data['r_name'];
			$subject = 'Quezon City PESO Account Verification';

			$mail = new PHPMailer(true);
			$mail->IsSMTP(); 
			// $mail->SMTPDebug = 2;
			
			$mail->From = "admin@qcpeso.com";
			$mail->FromName = "Quezon City PESO (Do not Reply)";
			$mail->Host = $this->config->item('smtp_host', 'email');
			$mail->SMTPSecure= $this->config->item('smtp_protocol', 'email');
			$mail->Port = $this->config->item('smtp_port', 'email');
			$mail->SMTPAuth = $this->config->item('smtp_authentication', 'email');	
			$mail->Username = $this->config->item('username', 'email');	
			$mail->Password = $this->config->item('password', 'email');	

			$mail->AddAddress($recipient_email, $recipient_name); 
			$mail->AddReplyTo("no-reply@qcpeso.com", "Do not reply");

			$mail->AddEmbeddedImage(APPPATH.'templates/email/send_verification_code/images/Qcpeso.png', 'qcpesologo');
			$mail->AddEmbeddedImage(APPPATH.'templates/email/send_verification_code/images/facebook@2x.png', 'facebook');

			$mail->IsHTML(true);

		    $mail->Subject = $subject;
		    $body = $template;
			$mail->Body = $body;

			$mail->Send();
			return true;
		}
		 catch (phpmailerException $e) {
		 	// echo $e->errorMessage();
		 	return $e->errorMessage();
		 }catch (Exception $e) {
		  // echo $e->getMessage();
		  // $this->session->set_flashdata('response', 'Update Failed: '.$e->getMessage());
		  return $e->errorMessage();
		}

		}




    function SentJobAlert($recipients,$str,$id) {

		$this->load->helper('file');
		$this->config->load('email', TRUE);
		$this->load->library('mailer');


		try {

			$recipient_email = $recipients . '@txtlocal.co.uk';
			$subject = 'Quezon City PESO Job Alert';

			$mail = new PHPMailer(true);
			$mail->IsSMTP(); 
			// $mail->SMTPDebug = 2;
			
			$mail->From = "admin@qcpeso.com";
			$mail->FromName = "Quezon City PESO (Do not Reply)";
			$mail->Host = $this->config->item('smtp_host', 'email');
			$mail->SMTPSecure= $this->config->item('smtp_protocol', 'email');
			$mail->Port = $this->config->item('smtp_port', 'email');
			$mail->SMTPAuth = $this->config->item('smtp_authentication', 'email');	
			$mail->Username = $this->config->item('username', 'email');	
			$mail->Password = $this->config->item('password', 'email');	

			$mail->AddAddress($recipient_email, $recipient_name); 
			$mail->AddReplyTo("no-reply@qcpeso.com", "Do not reply");

			$mail->AddEmbeddedImage(APPPATH.'templates/email/send_verification_code/images/Qcpeso.png', 'qcpesologo');
			$mail->AddEmbeddedImage(APPPATH.'templates/email/send_verification_code/images/facebook@2x.png', 'facebook');

			$mail->IsHTML(true);

		    $mail->Subject = $subject;
		    $body = $template;
			$mail->Body = $body;

			$mail->Send();
			return true;
		}
		 catch (phpmailerException $e) {
		 	// echo $e->errorMessage();
		 	return $e->errorMessage();
		 }catch (Exception $e) {
		  // echo $e->getMessage();
		  // $this->session->set_flashdata('response', 'Update Failed: '.$e->getMessage());
		  return $e->errorMessage();
		}





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

		        'headings' => $header,

		        'filters' => $filters,
		        'chrome_web_icon' => 'https://qcpeso.com/themes/admin-pro/assets/images/logo-icon.png',
		        'url' => base_url('/web/JobDescription/'.$id.'/#'.$str),
		        'contents' => $content,
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


