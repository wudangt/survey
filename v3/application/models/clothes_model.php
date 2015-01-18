<?php
class Clothes_model extends CI_Model {

    private $uid;
    public function setUid($newId) {
        $this->uid = $newId;
    }
    public function getUid() {
        return $this->uid;
    }

    function query_comment() {
        $query = "SELECT `comment`, fankui, hangshu, date, color, size, height, weight, reviewer
                  FROM pos_comments
                  WHERE type = 0 and hangshu not in (2,6)
                  UNION
                  SELECT `comment`, fankui, hangshu, date, color, size, height, weight, reviewer
                  FROM
                  clothes_negative
                  WHERE zubie = $this->uid%105
                  ORDER BY hangshu ASC ;";
        $q = $this->db->query($query);
        $ret['comments'] = $q->result();

        return $ret;
    }

    function do_stuff(&$form, $data)
    {
        $insert_data['uid'] = $this->getUid();
//        if(array_key_exists('gender', $data))
        $insert_data['p_1'] = $data['p_1'][0];
        $insert_data['p_2'] = $data['p_2'][0];
        $insert_data['p_3'] = $data['p_3'][0];
        $insert_data['p_4'] = $data['p_4'][0];
        $insert_data['p_5'] = $data['p_5'][0];
        $insert_data['p_6'] = $data['p_6'][0];
        $insert_data['p_7'] = $data['p_7'][0];
        $insert_data['p_8'] = $data['p_8'][0];
        $insert_data['p_9'] = $data['p_9'][0];
        $insert_data['p_10'] = $data['p_10'][0];
        $insert_data['p_11'] = $data['p_11'][0];
        $insert_data['p_12'] = $data['p_12'][0];
        $insert_data['p_13'] = $data['p_13'][0];
        $insert_data['p_14'] = $data['p_14'][0];
        $insert_data['p_15'] = $data['p_15'][0];
        $insert_data['p_16'] = $data['p_16'][0];
        $insert_data['p_17'] = $data['p_17'][0];
        $insert_data['p_18'] = $data['p_18'][0];
        $insert_data['p_19'] = $data['p_19'][0];
        $insert_data['p_20'] = $data['p_20'][0];
        $insert_data['p_21'] = $data['p_21'][0];
        $insert_data['p_22'] = $data['p_22'][0];
        $insert_data['p_23'] = $data['p_23'][0];
        $insert_data['p_24'] = $data['p_24'][0];
        $insert_data['p_25'] = $data['p_25'][0];
        $insert_data['p_26'] = $data['p_26'][0];
        $insert_data['p_27'] = $data['p_27'][0];
        $insert_data['p_28'] = $data['p_28'][0];
        $insert_data['p_29'] = $data['p_29'][0];
        $insert_data['p_30'] = $data['p_30'][0];
        $insert_data['p_31'] = $data['p_31'][0];
        $insert_data['p_32'] = $data['p_32'][0];
        $insert_data['p_33'] = $data['p_33'][0];
        $insert_data['p_34'] = $data['p_34'][0];
        $insert_data['p_35'] = $data['p_35'][0];
        $insert_data['p_36'] = $data['p_36'][0];
        $insert_data['p_37'] = $data['p_37'][0];
        $insert_data['p_38'] = $data['p_38'][0];
        $insert_data['p_39'] = $data['p_39'][0];
        $insert_data['p_40'] = $data['p_40'][0];
        if(array_key_exists('p_41', $data)) {
            $insert_data['p_41'] = $data['p_41'][0];
            $insert_data['p_42'] = $data['p_42'][0];
            $insert_data['p_43'] = $data['p_43'][0];
            $insert_data['p_44'] = $data['p_44'][0];
            $insert_data['p_45'] = $data['p_45'][0];
            $insert_data['p_46'] = $data['p_46'][0];
            $insert_data['p_47'] = $data['p_47'][0];
            $insert_data['p_48'] = $data['p_48'][0];
            $insert_data['p_49'] = $data['p_49'][0];
            $insert_data['p_50'] = $data['p_50'][0];
            $insert_data['p_51'] = $data['p_51'][0];
            $insert_data['p_52'] = $data['p_52'][0];
        }
        $this->db->from('clothes_survey_v3');
        $this->db->where('uid', $insert_data['uid']);
        if($this->db->count_all_results() == 0) {
            $this->db->insert('clothes_survey_v3', $insert_data);
        }
        else {
            $this->db->where('uid', $insert_data['uid']);
            $this->db->update('clothes_survey_v3', $insert_data);
        }
    }
}
