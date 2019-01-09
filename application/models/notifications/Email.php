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

	}