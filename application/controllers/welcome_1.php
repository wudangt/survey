<?php

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		// used in the view
		$this->load->helper('url');		
	}
	
	function index()
	{
		$this->load->library('form');
		
		$radios[] = array('m', 'male');
		$radios[] = array('f', 'female');

		$this->form

		// if the form is submitted to the same url this can be omitted
		->open('welcome')
		
		// look at the source and see how for each radio button and its label an id is being generated
		->radiogroup('gender', $radios, 'Your gender', 'm', 'required')
		
		// add a double break with 'clear: both' after the floating radio buttons
		->space(TRUE)
		
		// indent the following elements by 150px since they don't have a label
		->indent(150)
		
		// add a standard submit button ('Submit')
		->submit('Submit')
		
		// this is a nice way to reset a form including resetting all error messages
		// notice how the onclick is enclosed by double quotes in order to use single quotes in the script		
		->reset('Reset', 'reset', "onclick=document.location.href='welcome'")
		
		// add some 'margin-left' to the reset button 
		->margin(10)
		
		// calls a model after the form was submit and validated
		// to run some database queries or do some other stuff
		->model('example', 'do_stuff');

		// get the form output and write it to the $data array
		// this method automatically validates the form data
		$data['form'] = $this->form->get();

		if ($this->form->valid)
		{
			$post = $this->form->get_post(TRUE);
			redirect('welcome/success');
		}
		else
		{
			$data['errors'] = $this->form->errors;
		}

		$this->load->view("welcome", $data);
	}

	function success()
	{
		$this->load->view("success");
	}
}

/* End of file welcome_2.php */
/* Location: /application/controllers/welcome_2.php */