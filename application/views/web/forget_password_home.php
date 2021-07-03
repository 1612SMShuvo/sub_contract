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
                    <form action="<?php echo base_url()?>welcome/update_password" method="post">
                        <div class="form-single">
                            <label for="password">Verification Code<span>*</span></label>
                             <input type="text" id="random_number" name="random_number" max-length="6" value="" placeholder="Enter The Varification ">
                        </div>
                        <div class="form-single">
                            <label for="password">Password<span>*</span></label>
                            <input type="text" id="password" name="password" placeholder="Enter Your Password">
                        </div>
                        <div class="form-single">
                            <label for="retype_password">Re-type Password <span>*</span></label>
                            <input type="password" id="retype_password" name="retype_password"
                                   placeholder="Re-Type Password">
                        </div>
                        <div class="signin-button">
                            <button type="submit" class="btn btn-primary">Reset Password</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</main>