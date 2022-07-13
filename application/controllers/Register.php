<?php

class Register extends CI_Controller {

    public function RegisterUser(){
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'trim|required|matches[password]');

        if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('register');
                }
                else
                {
                        $this->load->model('User_Model');
                        $response = $this->User_Model->insertUserData();

                        if($response){

                            $this->session->set_flashdata('msg','Registerd Successfully! Please Login');
                            redirect('Home/Register');
                        }
                }
    }

}