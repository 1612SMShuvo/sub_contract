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
                    <form action="<?php echo base_url() ?>welcome/check_login" method="post">
                        <div class="form-single">
                            <label for="username">User Email<span>*</span></label>
                            <input type="text" id="username" name="email" placeholder="User Email" required="">
                        </div>
                        <div class="form-single">
                            <label for="password">Password <span>*</span></label>
                            <input type="hidden" name="status" value="<?php echo $status ?>">
                            <input type="password" id="password" name="password" placeholder="Enter Your Password" required="">
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked" >
                                I agree with all statement in <a href="<?php echo base_url() ?>terms_privacy/terms_service">terms of service</a>
                            </label>
                            <?php
                            $message = $this->session->userdata('msg');
                            if ($message) {
                                echo $message;
                                $this->session->unset_userdata('msg');
                            }
                            ?>
                        </div>
                        <div class="signin-button">
                            <!--                        <button>Sign in</button>-->
                            <button type="submit" class="btn btn-primary">Sign In</button>
                        </div>

                    </form>
                    <div class="row ">
                        <div class="col-md-10">
                       <a href="#" data-bs-toggle="modal" data-bs-target="#load_modal" onclick="forget()"><p>Forget Password ?</p></a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Modal -->
<div class="modal fade bd-example show" id="load_modal" tabindex="-1"
     aria-labelledby="exampleStandardModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div id="load_from">

                </div>

            </div>
        </div>
    </div>
</div>

<script>
    function forget() {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>welcome/load_forget_password_from',
            success: function (result) {
                if (result) {
                    $('#load_from').html(result);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>