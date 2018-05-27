<?php

/**
 * Created by PhpStorm.
 * User: Praveen
 * Date: 7/11/2017
 * Time: 12:05 AM
 */
class Recruiter_Controller extends CI_Controller
{
    public function index(){
        $this->load->view('Recruiter/Post_Job');
    }

    public function post_job(){
        $data = $this->input->post();
        $details = [
            'user_name'=>$data['name'],
            'email'=>$data['email'],
            'min_exp'=>$data['min_exp'],
            'max_exp'=>$data['max_exp'],
            'qualifications'=>$data['qualifications'],
            'salary'=>$data['salary'],
            'locations'=>$data['locations'],
            'skills_required'=>$data['skills_req'],
            'job_title'=>$data['job_title'],
            'job_desc'=>$data['job_desc'],
            'company_name'=>$data['company_name'],
        ];


        if ( ! $this->form_validation->run('post_job') ) {
            $this->form_validation->set_error_delimiters("<h6 class='text-danger'>","</h6>");
            $this->load->view('Recruiter/Post_Job');
        }else{
            //echo 'success';
            $this->session->set_flashdata('post_success','You\'ve successfully Posted a Job.' );
            $this->load->model('Recruiter_Model');
            $this->Recruiter_Model->post_job($details);
            return redirect('Home_Controller');

        }

    }
}