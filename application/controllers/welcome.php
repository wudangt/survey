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

		$radios_sex[] = array('1', '男');
		$radios_sex[] = array('2', '女');

		$radios_age[] = array('1', '< 18岁');
		$radios_age[] = array('2', '18~22岁');
		$radios_age[] = array('3', '23~25岁');
		$radios_age[] = array('4', '26~30岁');
		$radios_age[] = array('5', '>= 31岁');
		
		$radios_shop_exp[] = array('1', '五年以上');
		$radios_shop_exp[] = array('2', '三年到五年');
		$radios_shop_exp[] = array('3', '一年到三年');
		$radios_shop_exp[] = array('4', '不到一年');

        $radios_degree[] = array('1', '高中及以下');
        $radios_degree[] = array('2', '大专');
        $radios_degree[] = array('3', '本科');
        $radios_degree[] = array('4', '硕士');
        $radios_degree[] = array('5', '博士及以上');

        $radios_shop_freq[] = array('1', '5次');
        $radios_shop_freq[] = array('2', '2次');
        $radios_shop_freq[] = array('3', '1次');
        $radios_shop_freq[] = array('4', '0.5次');
        $radios_shop_freq[] = array('5', '0次');

        $radios_shop_cost[] = array('1', '小于100');
        $radios_shop_cost[] = array('2', '100~299');
        $radios_shop_cost[] = array('3', '300~499');
        $radios_shop_cost[] = array('4', '500~999');
        $radios_shop_cost[] = array('5', '1000以上');

        $radios_month_cost[] = array('1', '< 800');
        $radios_month_cost[] = array('2', '801~1200');
        $radios_month_cost[] = array('3', '1201~1600');
        $radios_month_cost[] = array('4', '1601~2000');
        $radios_month_cost[] = array('5', '> 2001');

		$this->form

		// if the form is submitted to the same url this can be omitted
		->open('welcome')

            ->radiogroup('gender', $radios_sex, '1. 请问您的性别？', '', 'required')
            // add a double break with 'clear: both' after the floating radio buttons
            ->space(TRUE)

            ->radiogroup('age', $radios_age, '2. 请问您的年龄？', '', 'required')
            ->space(TRUE)

            ->radiogroup('shop_exp', $radios_shop_exp, '3. 请问您有多久的网络购物经验？', '', 'required')
            ->space(TRUE)

            ->radiogroup('degree', $radios_degree, '4. 您的学历？', '', 'required')
            ->space(TRUE)

            ->radiogroup('shop_freq', $radios_shop_freq, '5. 您目前每月大概平均进行几次网络购物？', '', 'required')
            ->space(TRUE)

            ->radiogroup('shop_cost', $radios_shop_cost, '6. 您每月网络购物的花费为？', '', 'required')
            ->space(TRUE)

            ->radiogroup('month_cost', $radios_month_cost, '7. 请问您的月支出是多少？', '', 'required')
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
			redirect('welcome/success');
		}
		else
		{
			$data['errors'] = $this->form->errors;
		}

        $data['visitor_count'] = $this->welcome_model->visitor_count();
		$this->load->view("welcome", $data);
	}

	function success()
	{
		redirect('/clothes/index/'.$this->welcome_model->visitor_count(), 'refresh');
	}
}

/* End of file welcome_2.php */
/* Location: ./application/controllers/welcome_2.php */