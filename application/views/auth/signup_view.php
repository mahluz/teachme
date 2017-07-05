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

    <title>Sign Up</title>

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
    <style media="screen">
      .colorgraph {
        height: 5px;
        border-top: 0;
        background: #c4e17f;
        border-radius: 5px;

        }
    </style>
  </head>

  <body>

    <div class="container">

      <div class="row">
          <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          	<form role="form" action="<?= base_url('auth/register') ?>" method="post">
      			<h2>Welcome to Step by Step <small>Sign up</small></h2>
            <div id="infoMessage"><?php echo $message;?></div>
      			<hr class="colorgraph">
      			<div class="row">
      				<div class="col-xs-12 col-sm-6 col-md-6">
      					<div class="form-group">
                              <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
      					</div>
      				</div>
      				<div class="col-xs-12 col-sm-6 col-md-6">
      					<div class="form-group">
      						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
      					</div>
      				</div>
      			</div>
      			<div class="form-group">
      				<input type="text" name="user name" id="user_name" class="form-control input-lg" placeholder="User Name" tabindex="3">
      			</div>
      			<div class="form-group">
      				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
      			</div>
      			<div class="row">
      				<div class="col-xs-12 col-sm-6 col-md-6">
      					<div class="form-group">
      						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
      					</div>
      				</div>
      				<div class="col-xs-12 col-sm-6 col-md-6">
      					<div class="form-group">
      						<input type="password" name="password_confirm" id="password_confirm" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
      					</div>
      				</div>
      			</div>
              <div class="form-group">
                <select class="form-control" id="role" name="role" placeholder="sebagai">
                  <option value="2">TEACHER</option>
                  <option value="3">STUDENT</option>
                </select>
              </div>  
      			<div class="row">
      				<div class="col-xs-8 col-sm-9 col-md-9">
      					 By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a>
      				</div>
      			</div>

      			<hr class="colorgraph">
      			<div class="row">
      				<div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
      				<div class="col-xs-12 col-md-6"><a href="<?=base_url('auth/login'); ?>" class="btn btn-success btn-block btn-lg">Sign In</a></div>
      			</div>
      		</form>
      	</div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      	<div class="modal-dialog modal-lg">
      		<div class="modal-content">
      			<div class="modal-header">
      				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      				<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
      			</div>
      			<div class="modal-body">
                                  <p> Welcome to Step by Step
                              </div>
      			<div class="modal-footer">
      				<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
      			</div>
      		</div><!-- /.modal-content -->
      	</div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      </div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?= base_url() ?>assets/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">
    $(function () {
      $('.button-checkbox').each(function () {

          // Settings
          var $widget = $(this),
              $button = $widget.find('button'),
              $checkbox = $widget.find('input:checkbox'),
              color = $button.data('color'),
              settings = {
                  on: {
                      icon: 'glyphicon glyphicon-check'
                  },
                  off: {
                      icon: 'glyphicon glyphicon-unchecked'
                  }
              };

          // Event Handlers
          $button.on('click', function () {
              $checkbox.prop('checked', !$checkbox.is(':checked'));
              $checkbox.triggerHandler('change');
              updateDisplay();
          });
          $checkbox.on('change', function () {
              updateDisplay();
          });

          // Actions
          function updateDisplay() {
              var isChecked = $checkbox.is(':checked');

              // Set the button's state
              $button.data('state', (isChecked) ? "on" : "off");

              // Set the button's icon
              $button.find('.state-icon')
                  .removeClass()
                  .addClass('state-icon ' + settings[$button.data('state')].icon);

              // Update the button's color
              if (isChecked) {
                  $button
                      .removeClass('btn-default')
                      .addClass('btn-' + color + ' active');
              }
              else {
                  $button
                      .removeClass('btn-' + color + ' active')
                      .addClass('btn-default');
              }
          }

          // Initialization
          function init() {

              updateDisplay();

              // Inject the icon if applicable
              if ($button.find('.state-icon').length == 0) {
                  $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
              }
          }
          init();
      });
    });
    </script>
  </body>
</html>
