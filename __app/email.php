<?php

namespace notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email{

	private $email = \stdClass::class;

public function __construct($SMTPDebug,$smtp, $smtEmail, $pin, $smtpSicure, $port,$setEmail, $setname){
	
	$this->mail = new PHPMailer(true);
	$this->mail->SMTPDebug = $SMTPDebug;                                       // Enable verbose debug output
    $this->mail->isSMTP();                                            // Set mailer to use SMTP
    $this->mail->Host       = $smtp;  // Specify main and backup SMTP servers
    $this->mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $this->mail->Username   = $smtEmail;                     // SMTP username
    $this->mail->Password   = $pin;                               // SMTP password
    $this->mail->SMTPSecure = $smtpSicure;                                  // Enable TLS encryption, `ssl` also accepted
    $this->mail->Port       = $port;                                    // TCP port to connect to
    $this->mail->Charset = 'utf-8';
    $this->mail->setLanguage('br');
    $this->mail->isHtml(true);
    $this->mail->setFrom($setEmail, $setname);
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
