<?php

class Play extends CI_Controller
{
   public function index()
   {
       $this->load->model('user_model');
       $users = $this->user_model->getUser();
       echo '<pre>';
       print_r($users->result());
       echo '</pre>';
   }
}
