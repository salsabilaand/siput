<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Panel Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
        <link rel="stylesheet" href="csslogin.css">
    </head>
   
    <body>
        <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
            <div class="col-lg-12 login-title">
                ADMIN SIPUT JOMBANG
            </div>

            <div class="col-lg-12 login-form">
                <div class="col-lg-12 login-form">
                <form method="post" action="cek_login.php">
                    <div class="form-group">
                    <label class="form-control-label">USERNAME</label>
                    <input type="text" name="user" class="form-control">
                    </div>
                    <div class="form-group">
                    <label class="form-control-label">PASSWORD</label>
                    <input type="password" name="pass" class="form-control" i>
                    </div>

                    <div class="col-lg-12 loginbttm">
                    <div class="col-lg-6 login-btm login-text">
                        <!-- Error Message -->
                    </div>
                    <div class="col-lg-6 login-btm login-button">
                        <button type="submit" class="btn btn-outline-primary" name="submit">LOGIN</button>
                    </div>
                    </div>
                </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>     
    </body>
</html>