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

        $default_ratio = '';

		$this->form

		// if the form is submitted to the same url this can be omitted
		//->open('welcome')
            ->label('1. 请问您的性别？')
            ->br()
            ->radiogroup('gender', $radios_sex, '', $default_ratio, 'required')
            ->set_error('gender', '问题1必填。')
            // add a double break with 'clear: both' after the floating radio buttons
            ->space(TRUE)

            ->label('2. 请问您的年龄？')
            ->br()
            ->radiogroup('age', $radios_age, '', $default_ratio, 'required')
            ->set_error('age', '问题2必填。')
            ->space(TRUE)

            ->label('3. 请问您有多久的网络购物经验？')
            ->br()
            ->radiogroup('shop_exp', $radios_shop_exp, '', $default_ratio, 'required')
            ->set_error('shop_exp', '问题3必填。')
            ->space(TRUE)

            ->label('4. 您的学历？')
            ->br()
            ->radiogroup('degree', $radios_degree, '', $default_ratio, 'required')
            ->set_error('degree', '问题4必填。')
            ->space(TRUE)

            ->label('5. 您目前每月大概平均进行几次网络购物？（本研究中关于网络购物的定义是：您通过互联网搜索任何无形或有形的商品并最终购买（例如在网上购买一件衣服、在互联网中搜索一个餐厅的评价并前去就餐）。）')
            ->br()
            ->radiogroup('shop_freq', $radios_shop_freq, '', $default_ratio, 'required')
            ->set_error('shop_freq', '问题5必填。')
            ->space(TRUE)

            ->label('6. 您每月网络购物的花费为？（本研究中关于网络购物的金额为您通过互联网搜索任何无形或有形的商品并最终消费的金额。）')
            ->br()
            ->radiogroup('shop_cost', $radios_shop_cost, '', $default_ratio, 'required')
            ->set_error('shop_cost', '问题6必填。')
            ->space(TRUE)

            ->label('7. 请问您的月总支出是多少？')
            ->br()
            ->radiogroup('month_cost', $radios_month_cost, '', $default_ratio, 'required')
            ->set_error('month_cost', '问题7必填。')
            ->space(TRUE)

            ->label('8. 请问您的手机号是多少？(抽奖用)')
            ->br()
            ->text('phone_num', '', 'required|max_length[11]')
            ->set_error('phone_num', '问题8必填。')
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
            redirect('/clothes_state/index/'.substr(time(), 4, 10).$this->welcome_model->getUid(), 'refresh');
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