<!DOCTYPE html>
<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <style>
    .error {
        background: #F2DEDE;
        color: #A94442;
        padding: 10px;
        width: 95%;
        border-radius: 5px;
        margin: 20px auto;
    }

    .success {
        background: #D4EDDA;
        color: #40754C;
        padding: 10px;
        width: 95%;
        border-radius: 5px;
        margin: 20px auto;
    }
    </style>
</head>

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Register form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="register_check.php" method="post">
                            <h3 class="text-center text-info">Register</h3>
                            <?php if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>

                            <?php if (isset($_GET['success'])) { ?>
                            <p class="success"><?php echo $_GET['success']; ?></p>
                            <?php } ?>
                            <div class="form-group">
                                <label for="fullname" class="text-info">Full Name:</label><br>
                                <?php if (isset($_GET['fullname'])) { ?>
                                <input type="text" name="fullname" id="fullname"
                                    value="<?php echo $_GET['fullname']; ?>" class="form-control">
                                <?php }else{ ?>
                                <input type="text" name="fullname" class="form-control"><br>
                                <?php }?>
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <?php if (isset($_GET['uname'])) { ?>
                                <input type="text" name="username" id="username"
                                    value="<?php echo $_GET['username']; ?>" class=" form-control">
                                <?php }else{ ?>
                                <input type="text" name="username" class=" form-control"><br>
                                <?php }?>
                            </div>
                            <div class="form-group">

                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="login.php" class="text-info">Login here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>