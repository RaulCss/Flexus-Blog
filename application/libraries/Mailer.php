<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH . "/third_party/vendor/autoload.php";
use Mailgun\Mailgun;
/**
*
*/
class Mailer
{
	public function send($to, $subject, $text, $html){

            $mgClient = new Mailgun('key-bb93171d0fcf85f39897bc6f9c92b2e1');
            $domain = "sandboxfac9c2970503413ead1a4624716db0ec.mailgun.org";
            # Make the call to the client.
            $result = $mgClient->sendMessage($domain, array(
                'from'    => 'test@domain.com',
                'to'      => $to,
                'subject' => $subject,
                'text'    => $text,
                'html'    => $html
            ));
        return TRUE;
	}
}