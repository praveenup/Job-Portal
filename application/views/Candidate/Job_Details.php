<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobs - Dashboard </title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>

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
            <div class="panel-heading">
                <h1 class="text-center"><?= $details->company_name ?>( <?= $details->job_title ?> ) <span class="label label-primary text-right"><?= $details->date_posted ?></span></h1>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-2">
                        <h5>Experience Required : <?= $details->min_exp ?> - <?= $details->max_exp ?> Years</h5>
                    </div>

                    <div class="col-md-4 col-md-offset-2">
                        <h5>Salary : <?= $details->salary ?> LPA</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-2">
                        <h5>Locations : <?= $details->locations ?></h5>
                    </div>

                    <div class="col-md-4 col-md-offset-2">
                        <h5>Preferred Qualification : <?= $details->qualifications ?></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-2">
                        <h5>Skills Required : <?= $details->skills_required ?></h5>
                    </div>
                </div>
                <h5 class="bg-primary text-center" style="padding: 7px;">Job Description </h5> <p style="margin: 10px;"><?= $details->job_desc ?></p>
                <h5 class="bg-primary text-center" style="padding: 7px;">Contact Us </h5> <p class="text-center" style="padding: 7px;"><?= $details->user_name ?> - <?= $details->email ?></p>
                <div class="col-md-4 col-md-offset-4">
                    <a href="<?= base_url('index.php/Candidate_Controller/apply_job/'.$this->uri->segment(3)) ?>" class="btn btn-primary btn-block"> Apply </a>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>