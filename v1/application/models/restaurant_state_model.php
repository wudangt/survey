<?php

class Restaurant_state_model extends CI_Model {

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
}

/* End of file Example.php */
/* Location: /application/models/Example.php */