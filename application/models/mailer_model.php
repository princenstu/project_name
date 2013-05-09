<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mailer_model extends CI_Model
{

	/**
	 * Constructor
	 *
	 * @return Mailer_model
	 */
	function Mailer_model ()
	{
		parent::__construct();
		$this->load->library('email');
	}

	/**
	 * sends mail
	 * @param --- $data - information to place in the mail 
	 *$templateName - html template to use in mail body          
	 *@return --- none
	 *modified by ----- Shafiul Alam
	 *date --- 12/04/2009 (mm/dd/yyyy  )
	 */
	function sendeEmail($data, $templateName)
	{   
		//echo "<pre>";print_r($data);
        //echo "<br><br>".$templateName;exit;
		$this->email->set_mailtype('html');
		$this->email->from($data['from_address'],$data['admin_full_name']);
		$this->email->to($data['to_address']);
		//$this->email->cc($data['cc_address']);
		$this->email->subject($data['subject']);
		$body = $this->load->view('mailScripts/' . $templateName, $data, true);
		//echo $body;exit;
		$this->email->message($body);
		$this->email->send();
		$this->email->clear();
	}

   
	
}
?>
