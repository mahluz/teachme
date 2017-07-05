<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login Teachme</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?= base_url() ?>assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>assets/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?= base_url() ?>assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">
    
    <div id="infoMessage"><?php echo $message;?></div>

    <?php echo form_open("auth/login?q=".$q,'class="form-signin"');?>
      <h2 class="form-signin-heading">Please sign in</h2>
      <p>
        <?php echo lang('login_identity_label', 'identity','class="sr-only"');?>
        <?php echo form_input($identity,"",'class="form-control" placeholder="Email address"');?>
      </p>

      <p>
        <?php echo lang('login_password_label', 'password','class="sr-only"');?>
        <?php 
        $class = 'class="form-control" placeholder="Password"';
        echo form_input($password," ",$class);?>
      </p>

      <p>
        <?php echo lang('login_remember_label', 'remember');?>
        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
      </p>


      <p><?php 
      $attrib = array('class' => 'btn btn-lg btn-primary btn-block');
      echo form_submit('submit', lang('login_submit_btn'), $attrib);?></p>
      <div class="row">
       <p class="col-sm-8"><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
        <p class="pull-right text-right col-sm-4"><a href="signup"><?php echo('Sign Up');?></a></p>
      </div>
    <?php echo form_close();?>

   





    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?= base_url() ?>assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
