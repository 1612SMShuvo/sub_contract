<main class="body-padding">
    <section class="requestinvite-area specification-area">
        <div class="container">
            <div class="tab-content" id="pills-tabContent">
                <center><h2>Update Your Password</h2></center>
                <div class="tab-pane fade show active" id="pills-earning" role="tabpanel"
                     aria-labelledby="pills-earning-tab"><br>
                        <form action="<?php echo base_url()?>frontend/update_user_password" method="post" enctype="multipart/form-data">
                                <div class="form-single">
                                    <label for="uname">User Name <span>*</span></label>
                                    <input type="text" required="required" id="user_name" name="user_name" value="<?php echo $profile->user_name; ?>" placeholder="Organization Name" readonly>
                                </div>
                                <div class="form-single">
                                    <label for="uname">Profile Name <span>*</span></label>
                                    <input type="text" required="required" id="profile_name" name="profile_name" value="<?php echo $profile->profile_name; ?>" placeholder="Profile Name" >
                                </div>
                                <div class="form-single">
                                    <label for="phone">Phone Number <span>*</span></label>
                                    <input type="number" required="required" id="phone" value="<?php echo $profile->phone; ?>" name="phone" placeholder="Enter Your Phone Number" readonly>
                                </div>
                                <div class="form-single">
                                    <label for="email">Email <span>*</span></label>
                                    <input type="email" required="required" id="email" name="email" value="<?php echo $profile->email; ?>" placeholder="Enter Your Email Address" readonly>
                                </div>
                                <div class="form-single">
                                    <label for="password">Password <span>*</span></label>
                                    <input type="password" required="required" id="password" name="password" value="" placeholder="Enter Your Password">
                                </div>
    
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="hidden" value="1" name="terms_condition"
                                           id="flexCheckChecked" required="required" checked>
                                    
                                </div>
    
                                <div class="signin-button">
                                    <button type="submit" class="btn btn-primary">Update Now</button>
                                </div>
                                <p id="msg_basic"
                                   style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
                                    Basic information successfully Updated</p>
                                <p id="msg_basic_err"
                                   style="background-color: red;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
                                    Your basic information already exist !!!</p>
                            </form>
                </div>
            </div>
        </div>
    </section>
</main>