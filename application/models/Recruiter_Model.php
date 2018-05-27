<?php

/**
 * Created by PhpStorm.
 * User: Praveen
 * Date: 7/12/2017
 * Time: 6:29 PM
 */
class Recruiter_Model extends CI_Model
{
    public function post_job($details){
        $rows = $this->db->select_max('job_id')
            ->get('jobs_list')->row();

        if(!($rows->job_id > 0)){
            $details['job_id']='10000000';
        }else{
            $details['job_id']=$rows->job_id+1;
        }
        $this->db->insert('jobs_list',$details);
    }
}