<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Restaurant extends CI_Controller {
    #add
    function __construct()
    {
        parent::__construct();
        // used in the view
        $this->load->helper('url');
        $this->load->database();
    }

    public function index($uid = 0)
    {
        $this->load->library('form');
        $this->load->model('restaurant_model');
        $this->restaurant_model->setUid($uid);

        $isLoadAllProblem = false;
        $radios_sense[] = array('1', '1');
        $radios_sense[] = array('2', '2');
        $radios_sense[] = array('3', '3');
        $radios_sense[] = array('4', '4');
        $radios_sense[] = array('5', '5');
        $default_ratio = '3';

        if($isLoadAllProblem)
        {
            $this->form

                // if the form is submitted to the same url this can be omitted
                ->open('restaurant/index/'.$this->restaurant_model->getUid())

                ->radiogroup('p_1', $radios_sense, '1. 网页中的评论显示商家提供的产品或服务不是高质量的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_2', $radios_sense, '2. 网页中的评论显示该商家提供的产品或服务不是顾客想要的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_3', $radios_sense, '3. 网页中的评论显示该商家提供的产品或服务不是优秀的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_4', $radios_sense, '4. 网页中的评论显示该商家所提供的产品或服务的质量是无法接受的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_5', $radios_sense, '5. 网页中的评论显示该商家的服务人员对待顾客是不尊重的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_6', $radios_sense, '6. 网页中的评论显示该商家的服务人员不是很友好', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_7', $radios_sense, '7. 网页中的评论显示该商家的服务人员没有很好的照顾到顾客的需求', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_8', $radios_sense, '8. 网页中的评论显示该商家提供的产品/服务与其承诺的不是一样的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_9', $radios_sense, '9. 网页中的评论显示该商家没有成功地提供了一致的产品/服务', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_10', $radios_sense, '10. 网页中的评论显示该商家不很可靠', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_11', $radios_sense, '11. 网页中的评论显示该商家不是值得信赖的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_12', $radios_sense, '12. 我相信该商家会为我的利益着想', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_13', $radios_sense, '13. 如果我需求帮助，该商家会尽力帮助我', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_14', $radios_sense, '14. 该商家也会关心我的利益，而不是只关心他自己的利益', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_15', $radios_sense, '15. 在交往中，该商家是值得我信任的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_16', $radios_sense, '16. 我认为该商家是诚实的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_17', $radios_sense, '17. 该商家会遵守他的承诺', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_18', $radios_sense, '18. 该商家是真诚并且诚恳的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_19', $radios_sense, '19. 该商家提供的服务是有竞争力和有效率的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_20', $radios_sense, '20. 该商家非常好地尽到了他的职责', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_21', $radios_sense, '21. 总的来说，该商家是一个有能力而且能盈利的商家。', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_22', $radios_sense, '22. 总的来说，该商家在服装（餐饮）领域的知识是非常丰富', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_23', $radios_sense, '23. 我并不确定该该商家会以我的利益为重', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_24', $radios_sense, '24. 如果我需求帮助，我对于该商家是否会尽最大努力帮助我感到忧虑', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_25', $radios_sense, '25. 该商家只关心自己的利益，而不是我的利益', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_26', $radios_sense, '26. 在交往中，我对于该商家是否值得信任表示担忧', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_27', $radios_sense, '27. 我对于该商家是否是诚信的持谨慎的态度', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_28', $radios_sense, '28. 该商家是否会遵守其承诺是不确定的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_29', $radios_sense, '29. 我不确定该商家是否是真诚且诚恳的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_30', $radios_sense, '30. 我怀疑该商家是否有能力和能有效地提供商品或服务', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_31', $radios_sense, '31. 我不确定该商家是否很好地尽到了他的职责', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_32', $radios_sense, '32. 总的来说，我对于该商家是否是一个有能力而且能盈利的商家表示怀疑', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_33', $radios_sense, '33. 我对于该商家在商品或服务领域的知识的丰富程度表示怀疑', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_34', $radios_sense, '34. 我认为在网上从该商家购买产品或服务的主意很吸引人', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_35', $radios_sense, '35. 我喜欢在网上从该商家购买产品或服务的主意', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_36', $radios_sense, '36. 我觉得在网上购买该商家的产品或服务是个好主意', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_37', $radios_sense, '37. 我觉得选择该商家是一个坏主意', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_38', $radios_sense, '38. 选择该商家是一个愚蠢的主意', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_39', $radios_sense, '39. 我不喜欢选择该商家的主意', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_40', $radios_sense, '40. 购买该商家的产品或服务会让我感觉到愉快', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_41', $radios_sense, '41. 评论者收到了该商家真诚的“对不起”', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_42', $radios_sense, '42. 该商家给予了评论者诚恳的道歉', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_43', $radios_sense, '43. 评论者没有收到该商家任何形式的道歉', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_44', $radios_sense, '44. 该商家没有对评论者给予必要的道歉', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_45', $radios_sense, '45. 该商家对于评论者所抱怨的问题做出了合理的解释', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_46', $radios_sense, '46. 该商家无法解释清楚评论者所提及的问题并不是它的错', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_47', $radios_sense, '47. 该商家认为评论者提及的问题并不是自身的责任', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_48', $radios_sense, '48. 该商家给予了评论者一个让人满意的解释', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_49', $radios_sense, '49. 该商家对于评论者的损失做出了补救措施', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_50', $radios_sense, '50. 该商家承诺未来会提升自身的服务品质', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_51', $radios_sense, '51. 该商家采取了一定的行动来使评论者满意', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_52', $radios_sense, '52. 该商家对其造成的问题进行了补偿', $default_ratio, 'required')

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
                ->model('restaurant_model', 'do_stuff');
        } else {
            $this->form

                // if the form is submitted to the same url this can be omitted
                ->open('restaurant/index/'.$this->restaurant_model->getUid())

                ->radiogroup('p_1', $radios_sense, '1. 网页中的评论显示商家提供的产品或服务不是高质量的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_2', $radios_sense, '2. 网页中的评论显示该商家提供的产品或服务不是顾客想要的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_3', $radios_sense, '3. 网页中的评论显示该商家提供的产品或服务不是优秀的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_4', $radios_sense, '4. 网页中的评论显示该商家所提供的产品或服务的质量是无法接受的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_5', $radios_sense, '5. 网页中的评论显示该商家的服务人员对待顾客是不尊重的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_6', $radios_sense, '6. 网页中的评论显示该商家的服务人员不是很友好', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_7', $radios_sense, '7. 网页中的评论显示该商家的服务人员没有很好的照顾到顾客的需求', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_8', $radios_sense, '8. 网页中的评论显示该商家提供的产品/服务与其承诺的不是一样的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_9', $radios_sense, '9. 网页中的评论显示该商家没有成功地提供了一致的产品/服务', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_10', $radios_sense, '10. 网页中的评论显示该商家不很可靠', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_11', $radios_sense, '11. 网页中的评论显示该商家不是值得信赖的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_12', $radios_sense, '12. 我相信该商家会为我的利益着想', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_13', $radios_sense, '13. 如果我需求帮助，该商家会尽力帮助我', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_14', $radios_sense, '14. 该商家也会关心我的利益，而不是只关心他自己的利益', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_15', $radios_sense, '15. 在交往中，该商家是值得我信任的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_16', $radios_sense, '16. 我认为该商家是诚实的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_17', $radios_sense, '17. 该商家会遵守他的承诺', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_18', $radios_sense, '18. 该商家是真诚并且诚恳的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_19', $radios_sense, '19. 该商家提供的服务是有竞争力和有效率的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_20', $radios_sense, '20. 该商家非常好地尽到了他的职责', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_21', $radios_sense, '21. 总的来说，该商家是一个有能力而且能盈利的商家。', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_22', $radios_sense, '22. 总的来说，该商家在服装（餐饮）领域的知识是非常丰富', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_23', $radios_sense, '23. 我并不确定该该商家会以我的利益为重', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_24', $radios_sense, '24. 如果我需求帮助，我对于该商家是否会尽最大努力帮助我感到忧虑', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_25', $radios_sense, '25. 该商家只关心自己的利益，而不是我的利益', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_26', $radios_sense, '26. 在交往中，我对于该商家是否值得信任表示担忧', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_27', $radios_sense, '27. 我对于该商家是否是诚信的持谨慎的态度', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_28', $radios_sense, '28. 该商家是否会遵守其承诺是不确定的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_29', $radios_sense, '29. 我不确定该商家是否是真诚且诚恳的', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_30', $radios_sense, '30. 我怀疑该商家是否有能力和能有效地提供商品或服务', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_31', $radios_sense, '31. 我不确定该商家是否很好地尽到了他的职责', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_32', $radios_sense, '32. 总的来说，我对于该商家是否是一个有能力而且能盈利的商家表示怀疑', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_33', $radios_sense, '33. 我对于该商家在商品或服务领域的知识的丰富程度表示怀疑', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_34', $radios_sense, '34. 我认为在网上从该商家购买产品或服务的主意很吸引人', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_35', $radios_sense, '35. 我喜欢在网上从该商家购买产品或服务的主意', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_36', $radios_sense, '36. 我觉得在网上购买该商家的产品或服务是个好主意', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_37', $radios_sense, '37. 我觉得选择该商家是一个坏主意', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_38', $radios_sense, '38. 选择该商家是一个愚蠢的主意', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_39', $radios_sense, '39. 我不喜欢选择该商家的主意', $default_ratio, 'required')
                ->space(TRUE)
                ->radiogroup('p_40', $radios_sense, '40. 购买该商家的产品或服务会让我感觉到愉快', $default_ratio, 'required')

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
                ->model('restaurant_model', 'do_stuff');
        }

        // get the form output and write it to the $data array
        // this method automatically validates the form data
        $data['form'] = $this->form->get();

        if ($this->form->valid)
        {
            $post = $this->form->get_post(TRUE);
            redirect('restaurant/success');
        }
        else
        {
            $data['errors'] = $this->form->errors;
        }

        $result = $this->restaurant_model->query_comment();
        $data['comments'] = $result['comments'];
        $this->load->view('restaurant',$data);
    }

    function success()
    {
        $this->load->view("success");
    }
}