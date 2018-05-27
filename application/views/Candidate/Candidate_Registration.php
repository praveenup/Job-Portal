<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobs - Registration </title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>

</head>
<!--<body style="background: url('<?php echo base_url(); ?>assets/images/flag.jpg')">-->
<body style="margin-top: 100px;" >
<?php include 'includes/header.php'?>
<div class="container">
    <div class="col-md-12">
        <div class="panel panel-primary" style="box-shadow:  0 10px 10px 20px skyblue;opacity: .9;">
            <div class="panel-heading">
                <h2 class="text-center">Candidate Registration</h2>
            </div>
            <div class="panel-body">
                <h5 class="text-center">All fields are compulsory</h5>
                <?php echo form_open_multipart('Candidate_Controller/insert_registration',['class'=>'form-horizontal']);?>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Candidate Name </label>
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
                            <label class="col-lg-3 control-label">Password </label>
                            <div class="col-lg-9">
                                <?= form_input(['name'=>'password','type'=>'password','class'=>'form-control col-lg-4','value'=>set_value('password')])?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-offset-2">
                            <?= form_error('password') ?>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Confirm Password </label>
                            <div class="col-lg-9">
                                <?= form_input(['name'=>'confirm_password','type'=>'password','class'=>'form-control col-lg-4','value'=>set_value('confirm_password')])?>
                                <span id="message"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-offset-2">
                            <?= form_error('confirm_password') ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Mobile No. </label>
                            <div class="col-lg-9">
                                <?= form_input(['name'=>'mobile','class'=>'form-control col-lg-4','value'=>set_value('mobile')])?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-offset-2">
                            <?= form_error('mobile') ?>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Qualification </label>
                            <div class="col-lg-9">
                                <?= form_input(['name'=>'qualification','class'=>'form-control col-lg-4','value'=>set_value('qualification')])?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-offset-2">
                            <?= form_error('qualification') ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-offset-3">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Upload Resume </label>
                            <div class="col-lg-9">
                                <?= form_upload(['name'=>'resume','class'=>'form-control col-lg-4','value'=>set_value('resume')])?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-offset-2">
                            <?= form_error('resume') ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-offset-3">
                        <div class="form-group">
                            <?= form_submit(['name'=>'submit','value'=>'Register','class'=>'btn btn-primary btn-block'])?>
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