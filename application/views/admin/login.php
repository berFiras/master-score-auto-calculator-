<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>admin login</title>
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
      <style type="text/css">
         body {
         color: #4e4e4e;
         background: #e2e2e2;
         font-family: 'Roboto', sans-serif;
         }
         .form-control {
         background: #f2f2f2;
         font-size: 16px;
         border-color: transparent;
         box-shadow: none !important;
         }
         .form-control:focus {
         border-color: #91d5a8;
         background: #e9f5ee;
         }
         .form-control, .btn {        
         border-radius: 2px;
         }
         .login-form {
         width: 380px;
         margin: 0 auto;
         }
         .login-form h2 {
         margin: 0;
         padding: 30px 0;
         font-size: 34px;
         }
         .login-form .avatar {
         margin: 0 auto 30px;
         width: 100px;
         height: 100px;
         border-radius: 50%;
         z-index: 9;
         padding: 15px;
         box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
         }
         .login-form .avatar img {
         width: 100%;
         }
         .login-form form {
         color: #7a7a7a;
         border-radius: 4px;
         margin-bottom: 20px;
         background: #fff;
         box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
         padding: 30px;		
         }
         .login-form .btn {
         font-size: 16px;
         line-height: 26px;
         min-width: 120px;
         font-weight: bold;
         background: #4aba70;
         border: none;		
         }
         .login-form .btn:hover, .login-form .btn:focus{
         background: #40aa65;
         outline: none !important;
         }
         .checkbox-inline {
         margin-top: 14px;
         }
         .checkbox-inline input {
         margin-top: 3px;
         }
         .login-form a {
         color: #4aba70;
         }	
         .login-form a:hover {
         text-decoration: underline;
         }
         .hint-text {
         color: #999;
         text-align: center;
         padding-bottom: 15px;
         }
      </style>
   </head>
   <body>
      <div class="login-form">
         <h2 class="text-center">Admin Login</h2>
         <?php echo form_open('admin/login'); ?>
        
         <?php if (isset($error)) { ?>
         <div class="alert alert-danger" role="alert">
            <?= $error ?>
         </div>
         <?php } ?>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
         <div class="form-group">
            <input type="text" class="form-control input-lg" name="admin_login" placeholder="Login Admin" required="required">	
         </div>
         <div class="form-group">
            <input type="password" class="form-control input-lg" name="admin_password" placeholder="Mot de passe Admin" required="required">
         </div>
         <div class="form-group clearfix">
            <button type="submit" name="submit" class="btn btn-primary btn-lg pull-right">Sign in</button>
         </div>
         <?php echo form_close(); ?>
      </div>
   </body>
</html>