<?php

class Welcome_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    private $visit_count;

    function visitor_count() {
        static $isFirst = true;
        if($isFirst) {
            $visit_count = $this->db->count_all_results('restaurant_survey') + 1;
            $isFirst = false;
        }

        return $visit_count;

//        $this->db->from('investigator');
//        $this->db->where('uid', 1);
//        return $this->db->count_all_results();
    }

    function do_stuff(&$form, $data)
    {
		// do db stuff after the form was submit and validated

		// all validated post values are in $data
		// e.g. $data['username']
        //print_r($data);
        $insert_data['uid'] = $this->visitor_count();
//        if(array_key_exists('gender', $data))
        $insert_data['gender'] = $data['gender'][0];
        $insert_data['age'] = $data['age'][0];
        $insert_data['shop_exp'] = $data['shop_exp'][0];
        $insert_data['degree'] = $data['degree'][0];
        $insert_data['shop_freq'] = $data['shop_freq'][0];
        $insert_data['shop_cost'] = $data['shop_cost'][0];
        $insert_data['month_cost'] = $data['month_cost'][0];

        $this->db->from('investigator');
        $this->db->where('uid', $insert_data['uid']);
        if($this->db->count_all_results() == 0) {
            $this->db->insert('investigator', $insert_data);
        }
        else {
            $this->db->where('uid', $insert_data['uid']);
            $this->db->update('investigator', $insert_data);
        }


        // add custom errors to the form by using
		// $form->add_error('username', 'The Username is not valid');
    }
}

/* End of file Example.php */
/* Location: /application/models/Example.php */