<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clothes_state extends CI_Controller {
	#add
	function __construct()
	{
		parent::__construct();
        // used in the view
        $this->load->helper('url');
        $this->load->model('clothes_state_model');
	}

	public function index($encodeUid)
	{
        $this->clothes_state_model->setUid((int)substr($encodeUid,6));
        $this->load->library('form');

        $this->form

            // if the form is submitted to the same url this can be omitted
            //->open('clothes_state/')

            ->indent(150)
            // add a standard submit button ('Submit')
            ->submit('下一步')
            // add some 'margin-left' to the reset button
            ->margin(10);

        // get the form output and write it to the $data array
        // this method automatically validates the form data
        $data['form'] = $this->form->get();

        if ($this->form->valid)
        {
            redirect('/clothes/index/'.substr(time(), 4, 10).$this->clothes_state_model->getUid(), 'refresh');
        }
        else
        {
        }

        $data['visitor_count'] = $this->clothes_state_model->getUid();
        $this->load->view('clothes_state',$data);
	}
	
}