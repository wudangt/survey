<?php

class Welcome_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
	$this->load->database();
    }

    private $uid;
    public function setUid($newId) {
        $this->uid = $newId;
    }
    public function getUid() {
        return $this->uid;
    }

    function visitor_count() {
        return $this->db->count_all_results('clothes_survey_v4') + 1;
    }

    function query_uid($phone) {
        $query = $this->db->query('SELECT uid FROM (SELECT investigator_v4.uid, phone_num FROM investigator_v4 left join clothes_survey_v4 on investigator_v4.uid = clothes_survey_v4.uid) as a  WHERE a.phone_num = '.$phone.' LIMIT 1');
        //print_r($query->result()[0]->uid);
        if($query->num_rows() > 0) {
            return $query->row()->uid;
        }else {
	    return -1;	
	}
    }

    function do_stuff(&$form, $data)
    {
        // do db stuff after the form was submit and validated
        // all validated post values are in $data
        // e.g. $data['username']
        //print_r($data['phone_num']);
        $this->setUid($this->query_uid($data['phone_num']));

        //$insert_data['uid'] = $this->getUid();
//        if(array_key_exists('gender', $data))
//        $insert_data['gender'] = $data['gender'][0];
//        $insert_data['age'] = $data['age'][0];
//        $insert_data['shop_exp'] = $data['shop_exp'][0];
//        $insert_data['degree'] = $data['degree'][0];
//        $insert_data['shop_freq'] = $data['shop_freq'][0];
//        $insert_data['shop_cost'] = $data['shop_cost'][0];
//        $insert_data['month_cost'] = $data['month_cost'][0];
        //$insert_data['phone_num'] = $data['phone_num'];

        //$this->db->from('investigator_v2');
        //$this->db->where('uid', $insert_data['uid']);
        //if($this->db->count_all_results() == 0) {
        //    $this->db->insert('investigator_v2', $insert_data);
        //}
        //else {
        //    $this->db->where('uid', $insert_data['uid']);
        //    $this->db->update('investigator_v2', $insert_data);
        //}
    }
}

/* End of file Example.php */
/* Location: /application/models/Example.php */
