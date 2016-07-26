<?php 
class Share_model extends CI_Model
{
    public $user_id;
    public $type;
    public $date;

    public function __construct()
    {
            // Call the CI_Model constructor
            parent::__construct();
    }

    public function insert()
    {
        $this->user_id = $this->input->post('user_id');
        $this->type = $this->input->post('type');
        $this->date = time();

        $comment = $this->input->post('comment');

        $this->db->insert('records', $this);
        $record_id = $this->db->insert_id();

        if ($this->type == 'text') {
            $data = array(
                'record_id' => $record_id,
                'comment' => $comment
            );
            $this->db->insert('text_records', $data);
        }
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
