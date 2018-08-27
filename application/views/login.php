<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Admin Guest-Book PGASCOM</title>
    <style type="text/css">
    body{
        margin: 0;
        padding: 0;
        background: url('<?php echo base_url() ?>assets/img/office.jpg');
        background-size: cover;
        background-position: center;
        font-family: sans-serif;
        }

        .login-box{
            width: 320px;
            height: 390px;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%,-50%);
            box-sizing: border-box;
            padding: 70px 30px;
            }

        .avatar{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);
            }

        h1{
            margin: 0;
            padding: 0 0 20px;
            text-align: center;
            font-size: 22px;
        }

        .login-box p{
            margin: 0;
            padding: 0;
            font-weight: bold;
        }

        .login-box input{
            width: 100%;
            margin-bottom: 20px;
        }

        .login-box input[type="text"], input[type="password"]
        {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }

        .login-box input[type="submit"]
        {
            border: none;
            outline: none;
            height: 40px;
            background: #1c8adb;
            color: #fff;
            font-size: 18px;
            border-radius: 20px;
        }

        .login-box input[type="submit"]:hover
        {
            cursor: pointer;
            background: white;
            opacity: 0.6;
            color: #000;
        }

        .login-box a{
            text-decoration: none;
            font-size: 14px;
            color: #fff;
        }

        .login-box a:hover
        {
            color: grey
        }
    </style>
</head>
<body>
    <div class="login-box">
    <img src="<?php echo base_url() ?>assets/images/avatar.png" class="avatar">
        <h1>Login Admin</h1>
         <form class="form-login" method="POST" action="<?php echo base_url() ?>login">
            <label>Username</label>
            <input type="text" name="username" placeholder="Enter Username"><?php echo form_error('username'); ?>
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter Password"><?php echo form_error('password'); ?>
            <input type="submit" name="submit" value="Login">
            <a href="#">Forgot the password?</a>    
        </form>
    </div>
</body>
</html>