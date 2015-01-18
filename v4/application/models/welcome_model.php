<?php

class Welcome_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    private $uid;
    public function setUid($newId) {
        $this->uid = $newId;
    }
    public function getUid() {
        return $this->uid;
    }

    function visitor_count() {
        return $this->db->count_all_results('investigator_v4') + 1;
    }

    function do_stuff(&$form, $data)
    {
        // do db stuff after the form was submit and validated
        // all validated post values are in $data
        // e.g. $data['username']
        //print_r($data);
        $this->setUid($this->visitor_count());

        $insert_data['uid'] = $this->getUid();
//        if(array_key_exists('gender', $data))
        $insert_data['gender'] = $data['gender'][0];
        $insert_data['age'] = $data['age'][0];
        $insert_data['shop_exp'] = $data['shop_exp'][0];
        $insert_data['degree'] = $data['degree'][0];
        $insert_data['shop_freq'] = $data['shop_freq'][0];
        $insert_data['shop_cost'] = $data['shop_cost'][0];
        $insert_data['month_cost'] = $data['month_cost'][0];
        $insert_data['phone_num'] = $data['phone_num'];

        $this->db->from('investigator_v4');
        $this->db->where('uid', $insert_data['uid']);
        if($this->db->count_all_results() == 0) {
            $this->db->insert('investigator_v4', $insert_data);
        }
        else {
            $this->db->where('uid', $insert_data['uid']);
            $this->db->update('investigator_v4', $insert_data);
        }
    }
}

/* End of file Example.php */
/* Location: /application/models/Example.php */
