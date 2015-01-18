<?php

class Console_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function all_visit() {
        return $this->db->count_all_results('investigator_v4');
    }

    function cloth_visit() {
        return $this->db->count_all_results('clothes_survey_v4');
    }

    function return_visit() {
        //$query = $this->db->query('SELECT uid FROM clothes_survey_v2 WHERE uid < 200');
        //print_r($query->result()[0]->uid);
        //return $query->num_rows();
        return $this->db->count_all_results('clothes_survey_v3');
    }

    }

    function query_all_visit() {
        $query = "SELECT uid, phone_num
                  FROM investigator_v4;";
        $q = $this->db->query($query);
        $ret['all_uid'] = $q->result();

        return $ret;
    }

    function query_cloth_visit() {
        $query = "SELECT uid
                  FROM clothes_survey_v4;";
        $q = $this->db->query($query);
        $ret['cloth_uid'] = $q->result();

        return $ret;
    }
}

/* End of file Example.php */
/* Location: /application/models/Example.php */
