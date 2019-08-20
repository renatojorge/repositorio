<?php

namespace notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email{

	private $email = \stdClass::class;

public function __construct(){
	
	$this->mail = new PHPMailer(true);
	$this->mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $this->mail->isSMTP();                                            // Set mailer to use SMTP
    $this->mail->Host       = 'smtp-mail.outlook.com';  // Specify main and backup SMTP servers
    $this->mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $this->mail->Username   = 'renato-mantova@outlook.com';                     // SMTP username
    $this->mail->Password   = '*******';                               // SMTP password
    $this->mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $this->mail->Port       = 587;                                    // TCP port to connect to
    $this->mail->Charset = 'utf-8';
    $this->mail->setLanguage('br');
    $this->mail->isHtml(true);
    $this->mail->setFrom('from@example.com', 'Mailer');
}

public function sendEmail($subject, $body, $replyEmail, $replyName, $adressEmail, $adressName){

	$this->mail->subject = $subject;
	$this->mail->body = $body;
	$this->mail->AddReplyTo($replyEmail, $replyName);
	$this->mail->addAddress($adressEmail, $adressName);

	try {
		$this->mail->send();
	} catch (Exception $e) {
		echo "erro ao enviar email";
	}



}


}