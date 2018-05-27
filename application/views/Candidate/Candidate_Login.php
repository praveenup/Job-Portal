<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobs - Login </title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>

</head>
<!--<body style="background: url('<?php echo base_url(); ?>assets/images/flag.jpg')">-->
<body style="margin-top: 100px;" >
<?php include 'includes/header.php'?>
<div class="container">
    <?php if($message=$this->session->flashdata('registration_success')) : ?>
        <div class="row text-center">
            <div class="alert alert-success text-center">
                <?php echo $message ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="col-md-4 col-sm-offset-4">
        <div class="panel panel-primary" style="box-shadow:  0 10px 10px 20px skyblue;opacity: .9;">
            <div class="panel-heading">
                <h2 class="text-center">Job Portal</h2>
            </div>
            <div class="panel-body">
                <h1 class="text-center">Login</h1>
                <?php echo form_open('Candidate_Controller/Jobs_list',['class'=>'form-horizontal']);?>
                <?php if($error=$this->session->flashdata('login_failed')) : ?>
                    <div class="row">
                        <div class="alert alert-danger">
                            <?= $error ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <?= form_input(['name'=>'email','class'=>'form-control col-lg-4','placeholder'=>'Email','value'=>set_value('email')])?>
                    </div>
                    <div class="col-md-12 col-md-offset-1">
                        <?= form_error('email'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <?= form_password(['name'=>'password','class'=>'form-control col-lg-4','placeholder'=>'Password','value'=>set_value('password')])?>
                    </div>
                    <div class="col-md-12 col-md-offset-1">
                        <?= form_error('password'); ?>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px">
                    <div class="form-group">
                        <div class="text-center">
                            <?= form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-primary'])?>
                        </div>
                    </div>
                </div>
                <?= form_close(); ?>
                <div class="row" >
                    <div class="form-group">
                        <div class="text-center">
                            <h5 class="text-center">Not have an account?</h5>
                            <a href="<?= base_url('index.php/Candidate_Controller/registration') ?>"><h5 class="text-center btn btn-danger" >Register Here</h5></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>