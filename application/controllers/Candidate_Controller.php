<?php

class Candidate_Controller extends CI_Controller
{


    public function index(){
        if($this->session->userdata('can_id')){
            return redirect('Candidate_Controller/dashboard');
        }
        $this->load->view('Candidate/Candidate_Login');
    }

    public function registration(){
        $this->load->view('Candidate/Candidate_Registration');
    }

    public function insert_registration(){
        $data = $this->input->post();
        $config = [
            'upload_path' => './upload_resume',
            'allowed_types' => 'pdf',
            'file_name' => $data['mobile'].'_resume.pdf'
        ];

        $this->load->library('upload', $config);
        $path = $this->upload->data();

        $details = [
            'can_name'=>$data['name'],
            'can_email'=>$data['email'],
            'password'=>$data['password'],
            'can_mobile'=>$data['mobile'],
            'can_qualification'=>$data['qualification'],
            'can_resume'=>'/upload_resume/'.$data['mobile'].'_resume.pdf'
        ];

        if($this->form_validation->run('registration')){
            if ( ! $this->upload->do_upload('resume') ) {
                $this->form_validation->set_error_delimiters("<h6 class='text-danger'>","</h6>");
                $this->load->view('Candidate/Candidate_Registration');
            }else{
                //echo 'success';
                $this->session->set_flashdata('registration_success','You\'ve successfully registered. Now please login to countinue to apply jobs' );
                $this->load->model('Candidate_Model');
                $this->Candidate_Model->registration($details);
                return redirect('Candidate_Controller');

            }
        }else{
            $this->form_validation->set_error_delimiters("<h6 class='text-danger'>","</h6>");
            $this->load->view('Candidate/Candidate_Registration');
        }

    }

    public function dashboard(){
        if(!$this->session->userdata('can_id')){
            return redirect('Candidate_Controller');
        }
        $this->load->model('JobsList_Model','jobs_list');
        $rows['list'] = $this->jobs_list->jobs_fetch();
        $this->load->view('Candidate/Jobs_List',$rows);
    }

    public function jobs_list(){

        if($this->form_validation->run('login')){

            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $this->load->model('Candidate_Model');

            if($can_id = $this->Candidate_Model->login($email,$password)){
                $this->session->set_userdata('can_id',$can_id);
                return redirect('Candidate_Controller/dashboard');

            }else{

                $this->session->set_flashdata('login_failed','User does not exists, Please give correct email and password.');
                return redirect('Candidate_Controller');

            }
        }else{
            $this->form_validation->set_error_delimiters("<h6 class='text-danger'>","</h6>");
            $this->load->view('Candidate/Candidate_Login');

        }
    }



    public function job_Details(){
        if(!$this->session->userdata('can_id')){
            return redirect('Candidate_Controller');
        }
        $job_id = $this->uri->segment(3);
        $this->load->model('JobsList_Model','job_details');
        $rows['details'] = $this->job_details->job_details($job_id);
        $this->load->view('Candidate/Job_Details',$rows);

    }

    public function apply_job(){
        $job_id = $this->uri->segment(3);
        $this->load->model('Candidate_Model');
        $already_applied = $this->Candidate_Model->apply_job($job_id,$this->session->userdata('can_id'));
        if(!$already_applied){
            $this->session->set_flashdata('already_applied','This job already applied by you');
        }
        $this->session->set_flashdata('success_applied','You\'ve successfully applied the job' );
        return redirect('Candidate_Controller/dashboard');
    }

    public function logout(){
        $this->session->unset_userdata('can_id');
        return redirect('Candidate_Controller');
    }
}