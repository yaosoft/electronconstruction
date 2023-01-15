<?php
namespace ElectronApp;
/**
 * class Form
 * Permet de generer un formulaire
 */
class Form
{
	function sendmail($subject, $message)
	{
		$emailAdmin01 = 'yaosoft@hotmail.com';
		$emailAdmin02 = 'info@electron-engineering.ga';
		$emailSmtp = 'info@electron-engineering.ga';
		// Create the mail transport configuration
		$transport = \Swift_SmtpTransport::newInstance('server200.serverange.net', 465, 'ssl')
		    ->setUsername($emailSmtp)
			->setPassword('r@m*L2{Qews+');

		// Create the message
		$message = \Swift_Message::newInstance($subject)
        ->setFrom(array($emailSmtp => 'Electron-engineering.ga'))
        ->setTo(array( $emailAdmin02 => 'Bienvenue Kamga', $emailAdmin01 => 'Yaovi TCHUISSI'))
        ->setBody($message);
		
		// Send the email
		$mailer = \Swift_Mailer::newInstance($transport);
		$result = $mailer->send($message);
	}
}