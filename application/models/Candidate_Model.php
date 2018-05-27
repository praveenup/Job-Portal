<?php

/**
 * Created by PhpStorm.
 * User: Praveen
 * Date: 7/11/2017
 * Time: 4:03 PM
 */
class Candidate_Model extends CI_Model
{
    public function login($email,$pass){
        $query = $this->db->where(['can_email'=>$email,'password'=>$pass])->get('candidate');
        if($query->num_rows()){
            return $query->row()->can_id;
        }else{
            return false;
        }

    }

    public function registration($details){
        $rows = $this->db->select_max('can_id')
            ->get('candidate')->row();

        if(!($rows->can_id > 0)){
            $details['can_id']='10000000';
        }else{
            $details['can_id']=$rows->can_id+1;
        }
        $this->db->insert('candidate',$details);
    }

    public function apply_job($job_id,$can_id){
        $rows = $this->db->where(['can_id'=>$can_id,'job_id'=>$job_id])->get('applied_jobs');
        if(!$rows->num_rows()){
            $this->db->insert('applied_jobs',['can_id'=>$can_id,'job_id'=>$job_id]);
            return 1;
        }else{
            return 0;
        }


    }

}