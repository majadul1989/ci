<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['username']);
    $id       = ($this->session->userdata['logged_in']['user_id']);
    $actived  = ($this->session->userdata['logged_in']['actived']);
}else{
    $actived = "";

}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="opensource rich wysiwyg text editor jquery bootstrap execCommand html5" />
    <meta name="description" content="This tiny jQuery Bootstrap WYSIWYG plugin turns any DIV into a HTML5 rich text editor" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url('assets/js/jquery-2.2.3.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom_style.css');?>">


    <title>Welcome to CodeIgniter</title>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('/');?>"> <span class="glyphicon glyphicon-home"></span>Brand</a>
            </div>


            <ul class="nav navbar-nav navbar-right">
                <?php
                if (0 < $actived){?>
                    <li><a href="<?php echo base_url('login');?>"><?php echo $username; ?></a></li>
                    <li><a href="<?php echo base_url('login/logout');?>">Logout</a></li>


                <?php }else{ ?>
                    <li><a href="<?php echo base_url('login');?>">Login</a></li>
                    <li><a href="<?php echo base_url('user');?>">Registration</a></li>
                <?php }

                ?>

                <!--					<li class="dropdown">-->
                <!--						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
                <!--						<ul class="dropdown-menu">-->
                <!--							<li><a href="#">Action</a></li>-->
                <!--							<li><a href="#">Another action</a></li>-->
                <!--							<li><a href="#">Something else here</a></li>-->
                <!--							<li role="separator" class="divider"></li>-->
                <!--							<li><a href="#">Separated link</a></li>-->
                <!--						</ul>-->
                <!--					</li>-->
            </ul>
        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
