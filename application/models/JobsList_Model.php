<?php

/**
 * Created by PhpStorm.
 * User: Praveen
 * Date: 7/11/2017
 * Time: 10:37 AM
 */
class JobsList_Model extends CI_Model
{
    public function jobs_fetch(){
        $q = $this->db->get('jobs_list');
        return $q->result();
    }

    public function job_details($job_id){
        $q = $this->db->where(['job_id'=>$job_id])->get('jobs_list');
        return $q->row();
    }
}