<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('OFS/Post_model');
    }
    
    public function addPost(){
        $poster_id = $this->input->post('poster_name');
        $work = $this->input->post('work');
        $desc = $this->input->post('description');
        $w_count = $this->input->post('worker-count');
        $loc = $this->input->post('location');
        $min_p = $this->input->post('min-pay');
        $max_p = $this->input->post('max-pay');
        //echo date("M j Y", $timestamp)." ".date("h:iA", $timestamp);
        
        $data = array(
            'poster_ID' => $poster_id,
            'profession_ID' => $work,
            'worker_count' => $w_count,
            'requirements' => $desc,
            'location' => $loc,
            'min_pay' => $min_p,
            'max_pay' => $max_p,
            'timestamp'=> time()
        );

        if($this->Post_model->add_post($data)){
            redirect(base_url('NewsFeed'));
        }else {

        }

    }

}