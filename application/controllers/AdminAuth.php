<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class AdminAuth extends CI_Controller{
    public function index(){
        redirect(base_url('AdminAuth/Dashboard'));
    }

    public function AdminLogin(){
        
        if($this->session->userdata('UserLoginSession')){
            redirect(base_url('AdminAuth/Dashboard'));
        }
        $this->load->helper('url');
        
        $this -> load -> view ('Admin/inc/header');
        $this -> load -> view ('Admin/Login');

        $this->session->set_flashdata('error',NULL);
        $this->session->set_flashdata('success',NULL);

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $array_items = array('id' => '', 'email' => '','user_type'=>'');
            $this->session->unset_userdata($array_items);
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run()==TRUE){
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				

				$this->load->model('Admin/AdminAuth_model');
				$status = $this->AdminAuth_model->verifyUser($password,$email);
				if($status!=false){
					$email = $status->email;
                    $id = $status->id;
                    $user_type = $status->user_type;

					$session_data = array(
						'email'=>$email,
                        'id'=>$id,
                        'user_type'=>$user_type,
					);
					$this->session->set_userdata('UserLoginSession',$session_data);
                    redirect(base_url('AdminAuth/Dashboard'));
				}else{
					$this->session->set_flashdata('error','Email or Password is Wrong');
                    $this->load->helper('url');
                    redirect(base_url('AdminAuth/AdminLogin'));
				}
			}else{
				$this->session->set_flashdata('error','Fill all the required fields');
				$this->load->helper('url');
                redirect(base_url('AdminAuth/AdminLogin'));
			}
		}
    }

    public function AdminLogout(){
        $array_items = array('id' => '', 'email' => '');
        $this->session->unset_userdata($array_items);
        $this->session->sess_destroy();
        redirect(base_url('AdminAuth/AdminLogin'));
    }

    public function AdminRegister(){

        //load AdminRegister views     
        $this -> load -> view ('Admin/inc/header');  
        if($this->session->userdata('UserLoginSession')){
            redirect(base_url('Dashboard'));
        }
        $this -> load -> view ('Admin/Register');
    }

    public function Dashboard(){
        
        //load AdminDashboard views
        $this -> load -> view ('Admin/inc/header');
        $this -> load -> view ('Admin/inc/navbar');
        $this -> load -> view ('Admin/Dashboard');
    }

    public function ManageUser(){
        
        //load AdminManageUser views
        $this -> load -> view ('Admin/inc/header');
        $this -> load -> view ('Admin/inc/navbar');
        $this -> load -> view ('Admin/ManageUser');
    }

    public function ViewLogs(){
        
        //load AdminViewLogs views
        $this -> load -> view ('Admin/inc/header');
        $this -> load -> view ('Admin/inc/navbar');
        $this -> load -> view ('Admin/ViewLogs');
    }


}