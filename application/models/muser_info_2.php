class MUser_info extends Model{

  function MUser_info(){
    parent::Model();
  }
  
  function addUser(){
	  $now = date("Y-m-d H:i:s");
	  $data = array( 
		'name' => $this->input->xss_clean($this->input->post('name')),
		'email' => $this->input->xss_clean($this->input->post('email')),
		'notes' => $this->input->xss_clean($this->input->post('notes')),
		'ipaddress' => $this->input->ip_address(),
		'stamp' => $now
	  );

	  $this->db->insert('contacts', $data);
	 }
}