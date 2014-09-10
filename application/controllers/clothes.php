<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clothes extends CI_Controller {
	#add
	function __construct()
	{
		parent::__construct();
        // used in the view
        $this->load->helper('url');
		$this->load->database();
        $this->load->model('clothes_model');
	}

	public function index($encodeUid)
	{
        $this->clothes_model->setUid((int)substr($encodeUid,6));
        $this->load->library('form');

        $radios_sense[] = array('1', '1非常不认同');
        $radios_sense[] = array('2', '2不认同');
        $radios_sense[] = array('3', '3有一点不认同');
        $radios_sense[] = array('4', '4一般');
        $radios_sense[] = array('5', '5有一点认同');
        $radios_sense[] = array('6', '6认同');
        $radios_sense[] = array('7', '7非常认同');
        $default_ratio = '';

        $this->form

            // if the form is submitted to the same url this can be omitted
//            ->open('clothes/')

            ->label('1. 用户评论显示商家提供的产品/服务是高质量的')
            ->br()
            ->radiogroup('p_1', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_1', '问题1必填。')
            ->space(TRUE)
            ->label('2. 用户评论显示该商家的服务人员是友好的')
            ->br()
            ->radiogroup('p_2', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_2', '问题2必填。')
            ->space(TRUE)
            ->label('3. 用户评论显示该商家会做到其所承诺的')
            ->br()
            ->radiogroup('p_3', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_3', '问题3必填。')
            ->space(TRUE)
            ->label('4. 我对于该商家是否诚信持谨慎的态度')
            ->br()
            ->radiogroup('p_4', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_4', '问题4必填。')
            ->space(TRUE)
            ->label('5. 我不确定该商家是否会很好地尽到了他的职责')
            ->br()
            ->radiogroup('p_5', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_5', '问题5必填。')
            ->space(TRUE)
            ->label('6. 如果我寻求帮助，我怀疑该商家是否会尽最大努力帮助我')
            ->br()
            ->radiogroup('p_6', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_6', '问题6必填。')
            ->space(TRUE)
            ->label('7. 该商家也会关心我的利益，而不是只关心他自己的利益')
            ->br()
            ->radiogroup('p_7', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_7', '问题7必填。')
            ->space(TRUE)
            ->label('8. 我认为该商家会遵守他的承诺')
            ->br()
            ->radiogroup('p_8', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_8', '问题8必填。')
            ->space(TRUE)
            ->label('9. 总的来说，该商家有能力提供高质量的产品/服务')
            ->br()
            ->radiogroup('p_9', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_9', '问题9必填。')
            ->space(TRUE)
            ->label('10. 如果有需要，我会选择从该商家购买产品/服务')
            ->br()
            ->radiogroup('p_10', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_10', '问题10必填。')
            ->space(TRUE)
            ->label('11. 总的来说，我怀疑该商家是否有能力提供高质量的产品/服务')
            ->br()
            ->radiogroup('p_11', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_11', '问题11必填。')
            ->space(TRUE)
            ->label('12. 我不确定该商家是否会遵守其承诺')
            ->br()
            ->radiogroup('p_12', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_12', '问题12必填。')
            ->space(TRUE)
            ->label('13. 我认为该商家是真诚并且诚恳的')
            ->br()
            ->radiogroup('p_13', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_13', '问题13必填。')
            ->space(TRUE)
            ->label('14. 用户评论显示该商家的服务人员不尊重顾客')
            ->br()
            ->radiogroup('p_14', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_14', '问题14必填。')
            ->space(TRUE)
            ->label('15. 该商家非常好地尽到了他的职责')
            ->br()
            ->radiogroup('p_15', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_15', '问题15必填。')
            ->space(TRUE)
            ->label('16. 用户评论显示该商家提供的产品/服务与其承诺的是不一样的')
            ->br()
            ->radiogroup('p_16', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_16', '问题16必填。')
            ->space(TRUE)
            ->label('17. 该商家只关心自己的利益，而不是我的利益')
            ->br()
            ->radiogroup('p_17', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_17', '问题17必填。')
            ->space(TRUE)
            ->label('18. 用户评论显示该商家提供的产品或服务是顾客想要的')
            ->br()
            ->radiogroup('p_18', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_18', '问题18必填。')
            ->space(TRUE)
            ->label('19. 我相信该商家会为我的利益着想')
            ->br()
            ->radiogroup('p_19', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_19', '问题19必填。')
            ->space(TRUE)
            ->label('20. 在交易中，我对于该商家是否值得信任表示担忧')
            ->br()
            ->radiogroup('p_20', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_20', '问题20必填。')
            ->space(TRUE)
            ->label('21. 在交易中，该商家是值得我信任的')
            ->br()
            ->radiogroup('p_21', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_21', '问题21必填。')
            ->space(TRUE)
            ->label('22. 我怀疑该商家是否有能力且高效地提供产品/服务')
            ->br()
            ->radiogroup('p_22', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_22', '问题22必填。')
            ->space(TRUE)
            ->label('23. 该商家提供的产品/服务是有竞争力和有效率的')
            ->br()
            ->radiogroup('p_23', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_23', '问题23必填。')
            ->space(TRUE)
            ->label('24. 我怀疑该商家是否会以我的利益为重')
            ->br()
            ->radiogroup('p_24', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_24', '问题24必填。')
            ->space(TRUE)
            ->label('25. 我不确定该商家是否是真诚且诚恳的')
            ->br()
            ->radiogroup('p_25', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_25', '问题25必填。')
            ->space(TRUE)
            ->label('26. 总的来说，该商家在服装领域的专业程度很高')
            ->br()
            ->radiogroup('p_26', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_26', '问题26必填。')
            ->space(TRUE)
            ->label('27. 我认为该商家是诚实的')
            ->br()
            ->radiogroup('p_27', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_27', '问题27必填。')
            ->space(TRUE)
            ->label('28. 用户评论显示该商家提供了与其描述相一致的产品/服务')
            ->br()
            ->radiogroup('p_28', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_28', '问题28必填。')
            ->space(TRUE)
            ->label('29. 如果我寻求帮助，该商家会尽力帮助我')
            ->br()
            ->radiogroup('p_29', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_29', '问题29必填。')
            ->space(TRUE)
            ->label('30. 我对于该商家在商品或服务领域的专业程度表示怀疑')
            ->br()
            ->radiogroup('p_30', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_30', '问题30必填。')
            ->space(TRUE)
            ->label('31. 选择该商家是一个愚蠢的主意')
            ->br()
            ->radiogroup('p_31', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_31', '问题31必填。')
            ->space(TRUE)
            ->label('32. 用户评论显示该商家的服务人员很好地照顾到顾客的需求')
            ->br()
            ->radiogroup('p_32', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_32', '问题32必填。')
            ->space(TRUE)
            ->label('33. 网页中的评论显示该商家提供的产品或服务是优秀的')
            ->br()
            ->radiogroup('p_33', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_33', '问题33必填。')
            ->space(TRUE)
            ->label('34. 我觉得在网上购买该商家的产品或服务是个好主意')
            ->br()
            ->radiogroup('p_34', $radios_sense, '', $default_ratio, 'required')
            ->set_error('p_34', '问题34必填。')
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
            ->model('clothes_model', 'do_stuff');

        // get the form output and write it to the $data array
        // this method automatically validates the form data
        $data['form'] = $this->form->get();

        if ($this->form->valid)
        {
            $post = $this->form->get_post(TRUE);
//            redirect('/restaurant_state/index/'.substr(time(), 4, 10).$this->clothes_model->getUid(), 'refresh');
            redirect('restaurant/success');
        }
        else
        {
            $data['errors'] = $this->form->errors;
        }

        $data['visitor_count'] = $this->clothes_model->getUid();
        $result = $this->clothes_model->query_comment();
		$data['comments'] = $result['comments'];
        $this->load->view('clothes',$data);
	}

    function success()
    {
        $this->load->view("success");
    }
	
}