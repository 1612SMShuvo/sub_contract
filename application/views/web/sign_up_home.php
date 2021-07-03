<main class="fullpage-area">
    <div class="signin-area">
        <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <div class="signin-image">
                    <h1>Find & Hire <span><br> Experienced <br>Company</span></h1>
                    <p>Work with the best enlisted company from our secure, flexible and cost effective platform.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="signin-form">
                    <form action="<?php echo base_url()?>welcome/create_registration" method="post" enctype="multipart/form-data">
                        <div class="form-single">
                            <label for="uname">Organization Name <span>*</span></label>
                            <input type="text" required="required" id="user_name" onblur="check_user_name()"
                                   name="user_name"
                                   placeholder="Organization Name">
                            <p id="err_user_name" style="display: none; color: red; font-size: 12px;">
                                This User Name Already Exist !!!</p>
                        </div>
                        <div class="form-single">
                            <label for="phone">Phone Number <span>*</span></label>
                            <input type="number" required="required" id="phone" onkeyup="validation()" onblur="check_phone()" name="phone"
                                   placeholder="Enter Your Phone Number">
                            <p id="phone1" style="color: red; font-size: 12px;">
                            <p id="err_phone" style="display: none; color: red; font-size: 12px;">
                                This
                                Phone Number Already Exist !!!</p>
                        </div>
                        <div class="form-single">
                            <label for="email">Email <span>*</span></label>
                            <input type="email" required="required" id="email" onblur="check_email()" onkeyup="checkEmail()" name="email"
                                   placeholder="Enter Your Email Address">
                            <p id="valid" style="color: red; font-size: 12px;"></p>
                            <p id="err_email" style="display: none; color: red; font-size: 12px;">
                                This Email Already Exist !!!</p>
                        </div>
                        <!-- <div class="form-single">
                            <label for="password">Password <span>*</span></label>
                            <input type="password" required="required" id="password" name="password"
                                   placeholder="Enter Your Password">
                        </div> -->

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="" name="terms_condition"
                                   id="flexCheckChecked" required="required">
                            <label class="form-check-label" for="flexCheckChecked">
                                I agree with all statement in <a href="<?php echo base_url() ?>terms_privacy/terms_service">terms of service</a>
                            </label>
                        </div>

                        <div class="signin-button">
                            <button type="submit" class="btn btn-primary">Next</button>
                        </div>
                        <p id="msg_basic"
                           style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
                            Basic information successfully added</p>
                        <p id="msg_basic_err"
                           style="background-color: red;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
                            Your basic information already exist !!!</p>
                    </form>
                </div>
            </div>

        </div>
    </div>
</main>


<script>
    function check_user_name() {
        var user_name = $('#user_name').val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>welcome/check_user_name',
            data: {user_name: user_name},
            success: function (result) {
                if (result) {
                    $('#err_user_name').show();
                    $('#err_user_name').delay(10000).fadeOut(1000);
                    $('#user_name').val('');
                } else {
                    $('#err_user_name').hide();
                }
            }
        });
        return false;
    }

    function check_email() {
        var email = $('#email').val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>welcome/check_email',
            data: {email: email},
            success: function (result) {
                if (result) {
                    $('#err_email').show();
                    $('#err_email').delay(10000).fadeOut(1000);
                    $('#email').val('');
                } else {
                    $('#err_email').hide();
                }
            }
        });
        return false;
    }

    function check_phone() {
        var phone = $('#phone').val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>welcome/check_phone',
            data: {phone: phone},
            success: function (result) {
                if (result) {
                    $('#err_phone').show();
                    $('#err_phone').delay(10000).fadeOut(1000);
                    $('#phone').val('');
                } else {
                    $('#err_phone').hide();
                }
            }
        });
        return false;
    }
</script>

<script type="text/javascript">
    function validation() {
        var phone = document.getElementById("phone").value;
        var phonepattern = /^\+?([0-1]{2})\)?([0-9]{3})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{2})$/;
        if (phonepattern.test(phone)) {

            document.getElementById("phone1").innerHTML = "";
        }
        else {
            document.getElementById("phone1").innerHTML = "Phone Number Invalid!";
        }
    }

</script>

<script type="text/javascript">

    function checkEmail() {
        var email = document.getElementById("email").value;
        var emailpattern =/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (emailpattern.test(email)) {

            document.getElementById("valid").innerHTML = "";
        }
        else {
            document.getElementById("valid").innerHTML = "Email Invalid!";
        }
    }

</script>


