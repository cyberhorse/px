<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Share extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Share_model');
    }

    public function index() {
        $data = array(
            'records' => $this->Share_model->get()
        );
        $this->load->view('share/index.php', $data);
    }

    public function add() {
        $this->load->view('share/add.php');
    }

    public function text() {
        $data = array('user_id' => $this->session->userdata('user_id'));
        $this->load->view('share/text.php', $data);
    }

    public function audio() {
        $data = array('user_id' => $this->session->userdata('user_id'));
        $this->load->view('share/audio.php', $data);
    }

    public function video() {
        $data = array('user_id' => $this->session->userdata('user_id'));
        $this->load->view('share/video.php', $data);
    }


    public function save()
    {
        $this->Share_model->insert();

        redirect('share');
    }
}