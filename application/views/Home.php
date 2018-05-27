<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobs - Home </title>

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
        <?php if($message=$this->session->flashdata('post_success')) : ?>
            <div class="row text-center">
                <div class="alert alert-success text-center">
                    <?php echo $message ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="panel panel-primary" style="box-shadow:  0 5px 5px 10px skyblue;opacity: .9;">
            <div class="panel-body">
                <div class="col-md-6 col-sm-offset-3">
                    <h1 class="text-center">Welcome to world largest jobs Portal!</h1>
                    <div class="row">
                        <a href="<?php echo base_url(); ?>index.php/Candidate_Controller" class="btn btn-success btn-block">Looking for a Jobs</a>
                    </div>
                    <h4 class="text-center">OR</h4>
                    <div class="row">
                        <a href="<?php echo base_url(); ?>index.php/Recruiter_Controller" class="btn btn-success btn-block">Looking for a Candidate</a>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <h4 class="text-center">Please login to apply below available Jobs </h4>
        <?php foreach ($list as $lists) {?>
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
        <?php } ?>
    </div>
</div>


</body>
</html>