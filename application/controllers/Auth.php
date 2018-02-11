<?php

class Auth extends CI_Controller{

public function __construct()
{
       parent::__construct();
       $this->load->model('user_model');
}

   public function login()
   {
       $username = $this->input->post('username');
       $password = $this->input->post('password');
       $result = $this->user_model->checkLogin($username, $password);
       if($result->num_rows() > 0){

           //loginได้
           redirect('/user/profile');
          }else{
           redirect('/');
       }


}
}
