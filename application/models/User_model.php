<?php 
class User_model extends CI_Model
{
    public $name;
    
    public function __construct()
    {
            // Call the CI_Model constructor
            parent::__construct();
    }

    public function insert()
    {
        $this->name = $this->input->post('name');

        $this->db->insert('users', $this);
        $user_id = $this->db->insert_id();

        $this->session->set_userdata('user_id', $user_id);
    }

    public function get($type = null)
    {
        if ($type) {
            $this->db->where('type', $type);
        }

        $this->db->select('records.*, users.name, users.dob, users.gender');
        $this->db->from('records');
        $this->db->join('users', 'users.id = records.user_id');

        $query = $this->db->get();
        $results = $query->result_array();

        foreach ($results as $resultId => $result) {
            if ($result['type'] == 'text') {
                $query = $this->db->get_where('text_records', array('record_id' => $result['id']));
                $details = $query->row();
                $results[$resultId]['content'] = $details->comment;
            }
        }

        return $results;
    }

}
