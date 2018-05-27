<?php

class Home_Controller extends CI_Controller
{
    public function index(){
        $this->load->model('JobsList_Model','jobs_list');
        $rows['list'] = $this->jobs_list->jobs_fetch();
        $this->load->view('Home',$rows);
        //$this->load->view('Candidate/Jobs_List',$rows);

    }
}