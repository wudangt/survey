<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	#add
	function __construct()
	{
		parent::__construct();

		// used in the view
		$this->load->helper('url');
        $this->load->database();
        $this->load->model('welcome_model');
	}

	public function index()
	{
		$this->load->library('form');

        $default_ratio = '';

		$this->form

		// if the form is submitted to the same url this can be omitted
		//->open('welcome')
            ->label('1. 请输入您上次填写的手机号：')
            ->text('phone_num', '', 'required|max_length[11]')
            ->set_error('phone_num', '问题1必填。')
            ->space(TRUE)

            ->indent(150)
            // add a standard submit button ('Submit')
            ->submit('下一步')
            // this is a nice way to reset a form including resetting all error messages
            // notice how the onclick is enclosed by double quotes in order to use single quotes in the script
            ->reset('重置', 'reset', "onclick=document.location.href=''")

            // add some 'margin-left' to the reset button
            ->margin(10)

            // calls a model after the form was submit and validated
            // to run some database queries or do some other stuff
            ->model('welcome_model', 'do_stuff');

		// get the form output and write it to the $data array
		// this method automatically validates the form data
		$data['form'] = $this->form->get();

		if ($this->form->valid)
		{
			$post = $this->form->get_post(TRUE);
			if($this->welcome_model->getUid() == -1 ){
				redirect('http://imsheridan.com/survey/v4/', 'refresh');
			}else {
            			redirect('/clothes_state/index/'.substr(time(), 4, 10).$this->welcome_model->getUid(), 'refresh');
			}
		}
		else
		{
            // add custom errors to the form by using
			$data['errors'] = $this->form->errors;
		}

        $data['visitor_count'] = $this->welcome_model->visitor_count();
		$this->load->view("welcome", $data);
	}
}

/* End of file welcome_2.php */
/* Location: ./application/controllers/welcome_2.php */
