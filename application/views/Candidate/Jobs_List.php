<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobs - Job Details </title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <style>
        a{
            text-decoration: none !important;
        }
    </style>
</head>
<!--<body style="background: url('<?php echo base_url(); ?>assets/images/flag.jpg')">-->
<body style="margin-top: 100px;" >
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Job Portal</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="<?php echo base_url('index.php/Candidate_Controller/dashboard'); ?>jobsportal/index.php">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo base_url('index.php/Candidate_Controller/logout'); ?>">Logout</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="col-md-12">
        <div class="panel panel-primary" style="box-shadow:  0 5px 5px 10px skyblue;opacity: 1;">
            <div class="panel-body">
                <h1 class="text-center">Jobs List</h1>
                <?php if($message=$this->session->flashdata('already_applied')) { ?>
                    <div class="row text-center">
                        <div class="alert alert-success text-center">
                            <?php echo $message ?>
                        </div>
                    </div>
                      <?php }elseif( $message=$this->session->flashdata('success_applied')) { ?>
                    <div class="row text-center">
                        <div class="alert alert-success text-center">
                            <?php echo $message ?>
                        </div>
                    </div>
                <?php } ?>
                <?php foreach ($list as $lists) {?>
                <a href="<?= base_url('index.php/Candidate_Controller/job_details/'.$lists->job_id) ?>">
                    <div class="row" style="margin: 20px;">
                        <div class="panel panel-primary" >
                            <div class="panel-heading" style="padding-top: 5px;padding-bottom: 2px;">
                                <label><?= $lists->job_title ?></label>
                                <span class="text-center">- <?= $lists->company_name ?></span>
                                <span class="label label-warning"><?= $lists->date_posted ?></span>
                            </div>
                            <div class="panel-body" style="margin: 0;padding: 0;">
                                <ul>
                                    <li>Experience Required : <?= $lists->min_exp.' - '.$lists->max_exp?> years</li>
                                    <li>Salary : <?= $lists->salary ?> LPA</li>
                                    <li>Locations : <?= $lists->locations ?></li>
                                    <li>Skills Required : <?= $lists->skills_required ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>


</body>
</html>