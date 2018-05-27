<?php

$config = array(
    'login' => array(

        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required'
        )
    ),
    'registration' => array(

        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'required'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email|is_unique[candidate.can_email]'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|min_length[6]|max_length[16]'
        ),
        array(
            'field' => 'confirm_password',
            'label' => 'Confirm Password',
            'rules' => 'required|min_length[6]|max_length[16]|matches[password]'
        ),
        array(
            'field' => 'mobile',
            'label' => 'Mobile Number',
            'rules' => 'required|numeric|exact_length[10]|is_unique[candidate.can_mobile]'
        ),
        array(
            'field' => 'qualification',
            'label' => 'Qualification',
            'rules' => 'required'
        ),
    ),

    'post_job' => array(

        array(
            'field' => 'name',
            'label' => 'User Name',
            'rules' => 'required'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email'
        ),
        array(
            'field' => 'company_name',
            'label' => 'Company Name',
            'rules' => 'required'
        ),
        array(
            'field' => 'job_title',
            'label' => 'Job Title',
            'rules' => 'required'
        ),
        array(
            'field' => 'min_exp',
            'label' => 'Minimum Experience',
            'rules' => 'required|numeric'
        ),
        array(
            'field' => 'max_exp',
            'label' => 'Maximum Experience',
            'rules' => 'required|numeric'
        ),
        array(
            'field' => 'skills_req',
            'label' => 'skills Required',
            'rules' => 'required'
        ),
        array(
            'field' => 'qualifications',
            'label' => 'Qualifications',
            'rules' => 'required'
        ),
        array(
            'field' => 'locations',
            'label' => 'Locations',
            'rules' => 'required'
        ),
        array(
            'field' => 'salary',
            'label' => 'Salary',
            'rules' => 'required|numeric'
        ),
        array(
            'field' => 'job_desc',
            'label' => 'Job Description',
            'rules' => 'required'
        ),
    ),

);