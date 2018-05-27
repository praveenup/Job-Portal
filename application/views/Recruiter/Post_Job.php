<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobs - Post a Job </title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
</head>
<!--<body style="background: url('<?php echo base_url(); ?>assets/images/flag.jpg')">-->
<body style="margin-top: 100px;" >
<?php include 'includes/header.php'?>
<div class="container">
    <div class="col-md-12">
        <div class="panel panel-primary" style="box-shadow:  0 10px 10px 20px skyblue;opacity: .9;">
            <div class="panel-heading">
                <h2 class="text-center">Post a Job</h2>
            </div>
            <div class="panel-body">
                <h5 class="text-center">All fields are compulsory</h5>
                <?php echo form_open('Recruiter_Controller/post_job',['class'=>'form-horizontal']);?>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">User Name </label>
                            <div class="col-lg-9">
                                <?= form_input(['name'=>'name','class'=>'form-control col-lg-4','value'=>set_value('name')])?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-offset-2">
                            <?= form_error('name') ?>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email </label>
                            <div class="col-lg-9">
                                <?= form_input(['name'=>'email','class'=>'form-control col-lg-4','value'=>set_value('email')])?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-offset-2">
                            <?= form_error('email') ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Company Name </label>
                            <div class="col-lg-9">
                                <?= form_input(['name'=>'company_name','class'=>'form-control col-lg-4','value'=>set_value('company_name')])?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-offset-2">
                            <?= form_error('company_name') ?>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">job Title </label>
                            <div class="col-lg-9">
                                <?= form_input(['name'=>'job_title','class'=>'form-control col-lg-4','value'=>set_value('job_title')])?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-offset-2">
                            <?= form_error('job_title') ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Min. Experience </label>
                            <div class="col-lg-9">
                                <?= form_input(['name'=>'min_exp','class'=>'form-control col-lg-4','value'=>set_value('min_exp')])?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-offset-2">
                            <?= form_error('min_exp') ?>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Max. Experience </label>
                            <div class="col-lg-9">
                                <?= form_input(['name'=>'max_exp','class'=>'form-control col-lg-4','value'=>set_value('max_exp')])?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-offset-2">
                            <?= form_error('max_exp') ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Skills  Required </label>
                            <div class="col-lg-9">
                                <?= form_input(['name'=>'skills_req','class'=>'form-control col-lg-4','value'=>set_value('skills_req')])?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-offset-2">
                            <?= form_error('skills_req') ?>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Qualifications </label>
                            <div class="col-lg-9">
                                <?= form_input(['name'=>'qualifications','class'=>'form-control col-lg-4','value'=>set_value('qualifications')])?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-offset-2">
                            <?= form_error('qualifications') ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Locations </label>
                            <div class="col-lg-9">
                                <?= form_input(['name'=>'locations','class'=>'form-control col-lg-4','value'=>set_value('locations')])?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-offset-2">
                            <?= form_error('locations') ?>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Salary(LPA)</label>
                            <div class="col-lg-9">
                                <?= form_input(['name'=>'salary','class'=>'form-control col-lg-4','value'=>set_value('salary')])?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-offset-2">
                            <?= form_error('salary') ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Job Description </label>
                            <div class="col-lg-10">
                                <?= form_textarea(['name'=>'job_desc','class'=>'form-control col-lg-4','value'=>set_value('job_desc')])?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-offset-2">
                            <?= form_error('job_desc') ?>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-6 col-md-offset-3">
                        <div class="form-group">
                            <?= form_submit(['name'=>'submit','value'=>'Post Now','class'=>'btn btn-primary btn-block'])?>
                        </div>
                    </div>
                </div>

                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>


</body>
</html>