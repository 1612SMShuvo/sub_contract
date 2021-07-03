<!DOCTYPE html>
<html>
<head>
    <title>Forget Password</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>web_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>web_assets/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>web_assets/images/favicon.png"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>web_assets/css/slick.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>web_assets/css/slick-theme.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>web_assets/style.css">
    <script src="https://cdn.tiny.cloud/1/bipmow4lkz6ivlma357ta46a3z9l0e2dpuxap9eqizuo2j11/tinymce/5/tinymce.min.js"></script>
</head>
<body>
    <div class="forgetpasswrod-card" id="login">
        <img src="<?php echo base_url() ?>web_assets/images/logo1.png" alt="image">
        <h4> Reset your password </h4>
        <p> Enter your enlistwork.com email address so we can reset your password. </p>
        <form method="post" action="#" id="forget_password">
            <input type="email" name="email" id="email" placeholder="Enter Email">
            <button type="submit" value="Send" name="forgot_pass">Next</button>
        </form>
    </div>
<!-- 
<div id="main">
    <div id="login">
        <h2>Forgot Password</h2>
        <form method="post" action="#" id="forget_password">
            <label>Email ID :</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email ID"/><br/><br/>
            <input type="submit" class="btn btn-primary" value="Send" name="forgot_pass"/><br/>
        </form>
    </div>
</div>
 -->
<script>
    $(document).ready(function () {
        $('#forget_password').submit(function () {
            var dataString = $('#forget_password').serialize();
           
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>welcome/sent_email',
                data: dataString,
                success: function (result) {
                    if (result) {
                        $('#add_msg').html(result);
                        $('#add_msg .alert').delay(5000).fadeOut(1000);
                        $('#accessories_information_frm').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>welcome/sign_in";
                        }, 4000);
                        return false;
                    } else {
                        return false;
                    }
                }
            });
            return false;
        });
    });
</script>
</body>
</html>