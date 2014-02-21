<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

header('X-UA-Compatible: IE=edge,chrome=1');

class Doralautomall extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/doralautomall
	 *	- or -  
	 * 		http://example.com/index.php/doralautomall/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/doralautomall/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
		//$this->twiggy->display('home');
		$this->twiggy->display('home');
	}

	public function construccion()
	{
		$this->twiggy->display('construccion');
	}

	public function location()
	{
		$this->twiggy->display('location');
	}

	public function find()
	{
		$this->twiggy->display('find');
	}

	public function financing()
	{
		$this->twiggy->display('financing');
	}

	public function contact()
	{
		$this->twiggy->display('contact');
	}

	public function send_email()
	{


		$config = Array(
		    'protocol' => 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'doralautomall@gmail.com',
		    'smtp_pass' => '3054688996',
		    'mailtype'  => 'html', 
		    'charset'   => 'iso-8859-1'
		);
		
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");

		$this->email->from('info@doral-auto-mall.com', 'Contacto Doral Auto Mall');
		$this->email->to('paty.r15@gmail.com'); 
		
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');	

		$result = $this->email->send();

		if ( $result )
			echo("si");
		else
			show_error($this->email->print_debugger());
		exit;
		redirect('/doralautomall/financing');
	}

	public function about()
	{
		$this->twiggy->display('about');
	}
}

/* End of file doralautomall.php */
/* Location: ./application/controllers/doralautomall.php */