<main class="fullpage-area">
    <section class="postjob-area">
        <div class="container">
            <div class="row">
                <div class="project-slides">
                    <!-- project-singleslide -->
                    <div class="project-singleslide">
                        <div class="row">
                            <!-- ====================================== -->
                            <!-- ==========basic from start============ -->
                            <!-- ====================================== -->
                                  
                            <?php
                            $user_id = $this->session->userdata("user_id");
                            $basic = $this->Frontend_model->basic_info($user_id);
                            $user_name = $this->session->userdata("user_name");
                            if (!$basic) {
                            ?>
                            <div class="col-md-6 mb-4">
                                <div class="signin-form postjob-form basic">
                                    <h3>Basic</h3>
                                    <form id="basis_profile" method="post" action="#">
                                        <div class="postjob-det">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="formcheck-single mb-3">
                                                        <label class="form-checks mb-3" id="focused1">You are a <span>*</span></label>
                                                        <div class="form-check">
                                                            <input class="form-check-input" value="1" type="checkbox"
                                                                   name="publisher" id="publisher">
                                                            <label class="form-check-label" for="publisher">
                                                                Publisher
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" value="2" type="checkbox"
                                                                   name="investor" id="investor">
                                                            <label class="form-check-label" for="investor">
                                                                Investor
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" value="3" type="checkbox"
                                                                   name="bidder" id="bidder">
                                                            <label class="form-check-label" for="bidder">
                                                                Bidder
                                                            </label>
                                                                <span id="u1"></span>
                                                        </div>
                                                    </div>

                                                    <div class="formcheck-single mb-3">
                                                        <label class="form-checks mb-3">Business Type <span>*</span></label>
                                                        <div class="form-check">
                                                            <input required="required" class="form-check-input"
                                                                   type="radio" id="govt"
                                                                   value="1" name="business_type">
                                                            <label class="form-check-label" for="govt">
                                                                Govt
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input required="required" class="form-check-input"
                                                                   type="radio" id="private"
                                                                   value="2" name="business_type">
                                                            <label class="form-check-label" for="private">
                                                                Private/Ltd/Group of Company
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input required="required" class="form-check-input"
                                                                   type="radio" id="ngo"
                                                                   value="3" name="business_type">
                                                            <label class="form-check-label" for="ngo">
                                                                NGO/NPO
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input required="required" class="form-check-input"
                                                                   type="radio" id="individual"
                                                                   value="4" name="business_type">
                                                            <label class="form-check-label" for="individual">
                                                                Individual
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-single">
                                                        <label for="organization">Organization Name
                                                            <span>*</span></label>
                                                        <input type="text" id="organization"
                                                               placeholder="Organization Name" value="<?php echo $user_name;?>" name="organization_name" readonly>
                                                        <span id="u4"></span>
                                                    </div>
                                                    <div class="form-single">
                                                        <label for="office_address">Office Address
                                                            <span>*</span></label>
                                                        <input type="text" id="office_address" placeholder="Address"
                                                               name="office_address">
                                                        <span id="u5"></span>
                                                    </div>
                                                    <div class="form-single">
                                                        <label for="web">Web Address <span>*</span></label>
                                                        <input type="url" id="url" placeholder="https://www.example.com"
                                                                name="web_address"
                                                               onkeyup="validate()">
                                                        <span id="u6"></span>
                                                        <span style="color:red" id="web"></span>
                                                    </div>
                                                    <div class="form-single">
                                                        <label for="contact">Official Contact <span>*</span></label>
                                                        <input type="number" id="contact" placeholder="Contact Number"
                                                               name="official_contact" onkeyup="validation()"
                                                               >
                                                        <span id="u7"></span>
                                                        <span style="color:red" id="num"></span>
                                                    </div>
                                                    <div class="form-single">
                                                        <label for="nid">NID <span>*</span></label>
                                                        <input type="number" onkeyup="validation_nid1()" id="nid1" name="nid_card"
                                                               placeholder="Only 10 and 13 and 17 Digit "
                                                               >
                                                        <span id="u8"></span>
                                                        <p id="enid1" style="color:red"></p>

                                                    </div>
                                                    <div class="form-single">
                                                        <label for="tin">TIN <span>*</span></label>
                                                        <input type="number" id="tin1" onkeyup="validation_tin1()" name="tin"
                                                               placeholder="Only 12 Digit "
                                                               >
                                                        <span id="u9"></span>
                                                        <p id="etin1" style="color: red; font-size: 12px;"></p>

                                                    </div>
                                                    <div class="form-single">
                                                        <label for="tin">BIN <span>*</span></label>
                                                        <input type="number" id="bin1"  onkeyup="validation_bin1()" name="bin"
                                                               placeholder="Only 13 Digit"
                                                               >
                                                        <span id="u10"></span>
                                                        <p id="ebin" style="color: red; font-size: 12px;"></p>

                                                    </div>

                                                    <div class="form-single">
                                                        <label for="date">Established <span>*</span></label>
                                                        <input type="date" id="date" placeholder="Enter Your Established Date"
                                                               name="established" >
                                                        <span id="u11"></span>
                                                    </div>
                                                    <div class="form-single">
                                                        <label class="mb-3">Number of Employees <span>*</span></label>
                                                        <select class="form-select form-select-sm" id="number_of_employees"
                                                                name="number_of_employees" >
                                                            <option selected>5-10</option>
                                                            <option value="1">11-20</option>
                                                            <option value="2">21-30</option>
                                                            <option value="3">30-50</option>
                                                            <option value="3">50+</option>
                                                        </select>
                                                        <span id="u12"></span>
                                                    </div>
                                                    <div class="form-single">
                                                        <label class="mb-3">Years of Experiences <span>*</span></label>
                                                        <select class="form-select form-select-sm" id="years_of_experiences"
                                                                name="years_of_experiences">
                                                            <option selected>1-5</option>
                                                            <option value="1">6-15</option>
                                                            <option value="2">16-30</option>
                                                            <option value="3">30+</option>
                                                        </select>
                                                        <span id="u13"></span>
                                                    </div>

                                                    <div class="form-single">
                                                        <label for="logo">Company Logo <span>*</span></label>
                                                        <input type="file" id="company_logo" name="company_logo"
                                                               tabindex="0">
                                                    </div>

                                                        <div class="postjob-button pt-3">
                                                            <div class="signin-button">
                                                                <button>
                                                                    Save
                                                                </button>
                                                            </div>
                                                        </div>
                                                </div>

                                                        <!-------------------------------------------------------------After Submit Basic Info------------------------------------------------------->


                                                    <p id="basic_msg"
                                                       style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
                                                        Basic information successfully added</p>
                                                    <p id="basic_msg_err"
                                                       style="background-color: red;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
                                                        Your basic information already exist !!!</p>
                                            </div>
                                    </form>
                                </div>

                            </div>
                            <?php } else {?>
                                <div class="col-md-6 mb-4" style="opacity: 0.5">
                                    <div class="signin-form postjob-form basic">
                                        <h3>Basic</h3>
                                       
                                            <div class="postjob-det">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="formcheck-single mb-3">
                                                            <label class="form-checks mb-3">You are a <span>*</span></label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" value="1" type="checkbox"
                                                                       name="publisher" id="publisher" disabled>
                                                                <label class="form-check-label" for="publisher">
                                                                    Publisher
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" value="2" type="checkbox"
                                                                       name="investor" id="investor" disabled>
                                                                <label class="form-check-label" for="investor">
                                                                    Investor
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" value="3" type="checkbox"
                                                                       name="bidder" id="bidder" disabled>
                                                                <label class="form-check-label" for="bidder">
                                                                    Bidder
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="formcheck-single mb-3">
                                                            <label class="form-checks mb-3">Business Type <span>*</span></label>
                                                            <div class="form-check">
                                                                <input required="required" class="form-check-input"
                                                                       type="radio" id="govt"
                                                                       value="1" name="business_type" disabled>
                                                                <label class="form-check-label" for="govt">
                                                                    Govt
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input required="required" class="form-check-input"
                                                                       type="radio" id="private"
                                                                       value="2" name="business_type" disabled>
                                                                <label class="form-check-label" for="private">
                                                                    Private/Ltd/Group of Company
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input required="required" class="form-check-input"
                                                                       type="radio" id="ngo"
                                                                       value="3" name="business_type" disabled>
                                                                <label class="form-check-label" for="ngo">
                                                                    NGO/NPO
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input required="required" class="form-check-input"
                                                                       type="radio" id="individual"
                                                                       value="4" name="business_type" disabled>
                                                                <label class="form-check-label" for="individual">
                                                                    Individual
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-single">
                                                            <label for="organization">Organization Name
                                                                <span>*</span></label>
                                                            <input type="text" id="organization"
                                                                   placeholder="Organization Name" name="organization_name"
                                                                   readonly="readonly" >
                                                        </div>
                                                        <div class="form-single">
                                                            <label for="office_address">Office Address
                                                                <span>*</span></label>
                                                            <input type="text" id="office_address" placeholder="Address"
                                                                   name="office_address" required="required" readonly="readonly" >
                                                        </div>
                                                        <div class="form-single">
                                                            <label for="web">Web Address <span>*</span></label>
                                                            <input type="url" id="url" placeholder="https://www.example.com"
                                                                   required="required" name="web_address"
                                                                   onkeyup="validate()" readonly="readonly" >
                                                            <span style="color:red" id="web"></span>
                                                        </div>
                                                        <div class="form-single">
                                                            <label for="contact">Official Contact <span>*</span></label>
                                                            <input type="number" id="contact" placeholder="Contact Number"
                                                                   name="official_contact" onkeyup="validation()"
                                                                   required="required" readonly="readonly" >
                                                            <span style="color:red" id="num"></span>
                                                        </div>
                                                        <div class="form-single">
                                                            <label for="date">Established <span>*</span></label>
                                                            <input type="date" id="date" placeholder="Enter Your Email"
                                                                   name="established" required="required" readonly="readonly" >
                                                        </div>
                                                        <div class="form-single">
                                                            <label class="mb-3">Number of Employees <span>*</span></label>
                                                            <select class="form-select form-select-sm"
                                                                    name="number_of_employees" required="required" readonly="readonly" >
                                                                <option selected>5-10</option>
                                                                <option value="1">11-20</option>
                                                                <option value="2">21-30</option>
                                                                <option value="3">30-50</option>
                                                                <option value="3">50+</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-single">
                                                            <label class="mb-3">Years of Experiences <span>*</span></label>
                                                            <select class="form-select form-select-sm"
                                                                    name="years_of_experiences" required="required" readonly="readonly" >
                                                                <option selected>1-5</option>
                                                                <option value="1">6-15</option>
                                                                <option value="2">16-30</option>
                                                                <option value="3">30+</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-single">
                                                            <label for="logo">Company Logo <span>*</span></label>
                                                            <input type="file" id="company_logo" name="company_logo"
                                                                   tabindex="0" readonly="readonly" >
                                                        </div>


                                                        <div class="postjob-button pt-3">
                                                            <div class="signin-button">
                                                                <button>
                                                                    Save
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <!-------------------------------------------------------------After Submit Basic Info------------------------------------------------------->


                                                        <p id="msg_basic"
                                                           style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
                                                            Basic information successfully added</p>
                                                        <p id="msg_basic_err"
                                                           style="background-color: red;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
                                                            Your basic information already exist !!!</p>
                                                    </div>
                                                </div>
                                        
                                    </div>

                                </div>
                            <?php } ?>
</div>
                            <!-- ====================================== -->
                            <!-- ==========basic from end============== -->
                            <!-- ====================================== -->


                            <!-- ====================================== -->
                            <!-- ==========Management & Team=========== -->
                            <!-- ====================================== -->
                            <div class="col-md-6  mb-4">
                                <div class="signin-form postjob-form">
                                    <h3>Management & Team</h3>
                                    <form action="#" method="post" id="management_team" enctype="multipart/form-data">
                                        <div class="postjob-det">
                                            <div class="form-single">
                                                <label for="name">Name <span>*</span></label>
                                                <input type="text" id="name" name="name" placeholder="Name"
                                                       >
                                                       <span id="v1"></span>
                                            </div>
                                            <div class="form-single">
                                                <label for="desination">Desination <span>*</span></label>
                                                <input type="text" id="desination" name="designation"
                                                       placeholder="Designation">
                                                       <span id="v2"></span>
                                            </div>
                                            <div class="form-single">
                                                <label for="nid">NID <span>*</span></label>
                                                <input type="number"  onkeyup="validation_nid()" id="nid" name="nid"
                                                       placeholder="Only 10 and 13 and 17 Digit Nid Number"
                                                       required="required">
                                                       <span id="v3"></span>
                                                <p id="nid1" style="color:red"></p>
                                                <p id="err_nid" style="display: none; color: red; font-size: 12px;">This
                                                    NID Already exist !!!</p>
                                            </div>
                                            <div class="form-single">
                                                <label for="tin">TIN <span>*</span></label>
                                                <input type="number" id="tin" onkeyup="validation_tin()" name="tin"
                                                       placeholder="Only 12 Digit Tin Number"
                                                       required="required">
                                                       <span id="v4"></span>
                                                <p id="tin1" style="color: red; font-size: 12px;"></p>
                                                <p id="err_tin" style="display: none; color: red; font-size: 12px;">This
                                                    TIN Number Already Exist !!!</p>
                                            </div>
                                            <div class="form-single">
                                                <label for="email">Email <span>*</span></label>
                                                <input type="email" id="email"
                                                       name="email"
                                                       placeholder="Enter Your Email">
                                                       <span id="v5"></span>
                                                <p id="err_email" style="display: none; color: red; font-size: 12px;">
                                                    This
                                                    Email Already Exist !!!</p>
                                            </div>
                                            <div class="form-single">
                                                <label for="phone">Phone Number <span>*</span></label>

                                                <input type="number" onkeyup="validation_phone()" id="phone"
                                                      
                                                       name="phone"
                                                       placeholder="Enter Your Phone Number" required="required">
                                                       <span id="v6"></span>
                                                <p id="ban" style="color: red; font-size: 12px;"></p>
                                                <p id="err_phone" style="display: none; color: red; font-size: 12px;">

                                                    This Phone Number Already Exist !!!</p>
                                            </div>
                                            <div class="form-single">
                                                <label for="certificate">Profile Picture <span>*</span></label>
                                                <input type="file" id="profile_picture" name="profile_picture"
                                                       tabindex="0">
                                                       <span id="v7"></span>
                                            </div>
                                            <div class="postjob-button row">
                                                <div class="form-check mb-4 col-6">
                                                    <input class="form-check-input" class="form-control"
                                                           required="required" type="hidden" value="1"
                                                           id="flexCheckChecked">
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="postjob-button row">
                                                <div class="signin-button col-4">
                                                    <button class="btn btn-primary btn-sm">Save</button>
                                                </div>
                                                <div class="signin-button col-6">
                                                    <a href="<?php echo base_url() ?>frontend/management_team_view"
                                                       class="btn btn-primary btn-sm">Skip</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <p id="management_msg"
                                   style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;">
                                    Management Team information successfully added</p>
                                <p id="management_err"
                                   style="background-color: red;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
                                    Your Management Team information already exist !!!</p>
                            </div>
                            <!-- ====================================== -->
                            <!-- ==========Management & Team=========== -->
                            <!-- ====================================== -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>


<script>
    $(document).ready(function () {
        $('#basis_profile').submit(function () {
             if (validation() == true) {
            var dataString = new FormData($(this)[0]);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>frontend/create_basic_profile',
                data: dataString,
                async: false,
                success: function (result) {
                    if (result == 1) {
                        $('#basic_msg').show();
                        $('#basic_msg').delay(6000).fadeOut(1000);
                        $('#basis_profile').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>frontend";
                        }, 3000);
                        return false;
                    } else {
                        $('#basic_err').show();
                        $('#basic_err').delay(6000).fadeOut(1000);
                        $('#basis_profile').trigger("reset");
                        return false;
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
            return false;
            } else {
                return false;
            }
        });

        function validation() {
            var checked = $("input[type=checkbox]:checked").length;
            var organization = $('#organization').val();
            var office_address = $('#office_address').val();
            var url = $('#url').val();
            var contact = $('#contact').val();
            var nid1 = $('#nid1').val();
            var tin1 = $('#tin1').val();
            var bin1 = $('#bin1').val();
            var date = $('#date').val();
            var years_of_experiences = $('#years_of_experiences').val();
            var number_of_employees = $('#number_of_employees').val();
            
            // if (organization.length == "" || office_address.length == "" || url.length == "" || contact.length == "" || nid1.length == "" || tin1.length == "" || bin1.length == "" || date.length == "" || years_of_experiences.length == "" || number_of_employees.length == "") {
             if (checked.length<1 || organization.length == "" || office_address.length == "" || url.length == "" || contact.length == "" || nid1.length == "" || tin1.length == "" || bin1.length == "" || date.length == "" || years_of_experiences.length == "" || number_of_employees.length == "") {
                if (checked.length<1) {
                    $('#u1').html("<code class='err_msg'>* This field is mandatory *</code>");
                    $("#u1 .err_msg").delay(3000).fadeOut(800);
                    $("#bidder").focus();
                }
                if (organization.length == "") {
                    $('#u4').html("<code class='err_msg'>* This field is mandatory *</code>");
                    $("#u4 .err_msg").delay(3000).fadeOut(800);
                    $("#organization").focus();
                }
                if (office_address.length == "") {
                    $('#u5').html("<code class='err_msg'>* This field is mandatory *</code>");
                    $("#u5 .err_msg").delay(3000).fadeOut(800);
                    $("#office_address").focus();
                }
                if (url.length == "") {
                    $('#u6').html("<code class='err_msg'>* This field is mandatory *</code>");
                    $('#u6 .err_msg').delay(3000).fadeOut(800);
                    $('#url').focus();
                }
                if (contact.length == "") {
                    $('#u7').html("<code class='err_msg'>* This field is mandatory *</code>");
                    $('#u7 .err_msg').delay(3000).fadeOut(800);
                    $('#contact').focus();
                }
                if (nid1.length == "") {
                    $('#u8').html("<code class='err_msg'>* This field is mandatory *</code>");
                    $('#u8 .err_msg').delay(3000).fadeOut(800);
                    $('#nid1').focus();
                }
                if (tin1.length == "") {
                    $('#u9').html("<code class='err_msg'>* This field is mandatory *</code>");
                    $('#u9 .err_msg').delay(3000).fadeOut(800);
                    $('#tin1').focus();
                }
                if (bin1.length == "") {
                    $('#u10').html("<code class='err_msg'>* This field is mandatory *</code>");
                    $('#u10 .err_msg').delay(3000).fadeOut(800);
                    $('#bin1').focus();
                }
                if (date.length == "") {
                    $('#u11').html("<code class='err_msg'>* This field is mandatory *</code>");
                    $('#u11 .err_msg').delay(3000).fadeOut(800);
                    $('#date').focus();
                }
                if (years_of_experiences.length == "") {
                    $('#u12').html("<code class='err_msg'>* This field is mandatory *</code>");
                    $('#u12 .err_msg').delay(3000).fadeOut(800);
                    $('#years_of_experiences').focus();
                }
                if (number_of_employees.length == "") {
                    $('#u13').html("<code class='err_msg'>* This field is mandatory *</code>");
                    $('#u13 .err_msg').delay(3000).fadeOut(800);
                    $('#number_of_employees').focus();
                }
                return false;
            }
            else {
                return true
            }
        }
    });
</script>


<script>
    $(document).ready(function () {
        $('#management_team').submit(function () {
             if (validation() == true) {
            var dataString = new FormData($(this)[0]);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>frontend/create_management_team',
                data: dataString,
                async: false,
                success: function (result) {
                    if (result == 1) {

                        $('#management_msg').show();
                        $('#management_msg').delay(5000).fadeOut(1000);
                        $('#management_team').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>frontend/management_team_view";
                        }, 3000);
                        return false;
                    } else {
                        $('#management_err').show();
                        $('#management_err').delay(6000).fadeOut(1000);
                        $('#management_team').trigger("reset");
                        return false;
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
            return false;
             } else {
                return false;
            }
        });
        
        function validation() {
        var name = $('#name').val();
        var desination = $('#desination').val();
        var nid = $('#nid').val();
        var tin = $('#tin').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var profile_picture = $('#profile_picture').val();
        

        if (name.length == "" || desination.length=="" || nid.length == "" || tin.length == "" || email.length == ""|| phone.length == ""|| profile_picture.length == "") {
            if (name.length == "") {
                $('#v1').html("<code class='err_msg'>* Name field is Mandatory *</code>");
                $("#v1 .err_msg").delay(3000).fadeOut(800);
                $("#name").focus();
            }
            if (desination.length == "") {
                $('#v2').html("<code class='err_msg'>* Designation field is mandatory *</code>");
                $("#v2 .err_msg").delay(3000).fadeOut(800);
                $("#desination").focus();
            }
            if (nid.length == "") {
                $('#v3').html("<code class='err_msg'>* NID Number  is mandatory *</code>");
                $('#v3 .err_msg').delay(3000).fadeOut(800);
                $('#nid').focus();
            }
            if (tin.length == "") {
                $('#v4').html("<code class='err_msg'>*Tin is mandatory *</code>");
                $('#v4 .err_msg').delay(3000).fadeOut(800);
                $('#tin').focus();
            }
            if (email.length == "") {
                $('#v5').html("<code class='err_msg'>*Email is mandatory *</code>");
                $('#v5 .err_msg').delay(3000).fadeOut(800);
                $('#email').focus();
            }
            if (phone.length == "") {
                $('#v6').html("<code class='err_msg'>* Phone Number is mandatory *</code>");
                $('#v6 .err_msg').delay(3000).fadeOut(800);
                $('#phone').focus();
            }
             if (profile_picture.length == "") {
                $('#v7').html("<code class='err_msg'>* Profile Image is mandatory *</code>");
                $('#v7 .err_msg').delay(3000).fadeOut(800);
                $('#profile_picture').focus();
            }
            return false;
        }
        else {
            return true
        }
    }

});
</script>

<script>
    function check_nid() {
        var nid = $('#nid').val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>frontend/check_nid',
            data: {nid: nid},
            success: function (result) {
                if (result) {
                    $('#err_nid').show();
                    $('#err_nid').delay(5000).fadeOut(1000);
                    $('#nid').val('');
                } else {
                    $('#err_nid').hide();
                }
            }
        });
        return false;
    }
    function check_tin() {
        var tin = $('#tin').val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>frontend/check_tin',
            data: {tin: tin},
            success: function (result) {
                if (result) {
                    $('#err_tin').show();
                    $('#err_tin').delay(5000).fadeOut(1000);
                    $('#tin').val('');
                } else {
                    $('#err_tin').hide();
                }
            }
        });
        return false;
    }
    function check_email() {
        var email = $('#email').val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>frontend/check_email',
            data: {email: email},
            success: function (result) {
                if (result) {
                    $('#err_email').show();
                    $('#err_email').delay(5000).fadeOut(1000);
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
            url: '<?php echo base_url() ?>frontend/check_phone',
            data: {phone: phone},
            success: function (result) {
                if (result) {
                    $('#err_phone').show();
                    $('#err_phone').delay(5000).fadeOut(1000);
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
        var contact = document.getElementById("contact").value;
        var contactpattern = /^\+?([0-1]{2})\)?([0-9]{3})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{2})$/;
        if (contactpattern.test(contact)) {
            document.getElementById("num").innerHTML = "";
        }
        else {
            document.getElementById("num").innerHTML = "Phone Number Invalid!";
        }
    }

</script>


<script type="text/javascript">
    function validate() {
        var url = document.getElementById("url").value;
        var pattern = /(http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
        if (pattern.test(url)) {
            document.getElementById("web").innerHTML = "";

        }
        else {
            document.getElementById("web").innerHTML = "Url Link Invalid!";
        }


    }
</script>

<script type="text/javascript">
    function validation_phone() {
        var phone = document.getElementById("phone").value;
        var phonepattern = /^\+?([0-1]{2})\)?([0-9]{3})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{2})$/;
        if (phonepattern.test(phone)) {

            document.getElementById("ban").innerHTML = "";
        }
        else {
            document.getElementById("ban").innerHTML = "Phone Number Invalid!";
        }
    }

</script>


<script type="text/javascript">
    function validation_nid1() {
        var nid = document.getElementById("nid1").value;
        var nidpattern = /^\+?([0-9]{17})\)?$/;
        var nidpattern1 = /^\+?([0-9]{13})\)?$/;
        var nidpattern2 = /^\+?([0-9]{10})\)?$/;
        if (nidpattern.test(nid) || nidpattern1.test(nid)|| nidpattern2.test(nid) ) {

            document.getElementById("enid1").innerHTML = "";
        }
        else {
            document.getElementById("enid1").innerHTML = "NID Invalid!";
        }
    }

</script>


<script type="text/javascript">
    function validation_tin1() {
        var tin = document.getElementById("tin1").value;
        var tinpattern = /^\+?([0-9]{12})\)?$/;
        if (tinpattern.test(tin)) {

            document.getElementById("etin1").innerHTML = "";
        }
        else {
            document.getElementById("etin1").innerHTML = "TIN Invalid!";
        }
    }

</script>


<script type="text/javascript">
    function validation_bin1() {
        var bin1 = document.getElementById("bin1").value;
        var binpattern = /^\+?([0-9]{9})\)?$/;
        var binpattern1 = /^\+?([0-9]{11})\)?$/;
        var binpattern2 = /^\+?([0-9]{13})\)?$/;
        if (binpattern.test(bin1)|| binpattern1.test(bin1) || binpattern2.test(bin1)) {

            document.getElementById("ebin").innerHTML = "";
        }
        else {
            document.getElementById("ebin").innerHTML = "BIN Invalid!";
        }
    }

</script>



<script type="text/javascript">
    function validation_nid() {
        var nid = document.getElementById("nid").value;
        var nidpattern = /^\+?([0-9]{17})\)?$/;
        var nidpattern1 = /^\+?([0-9]{13})\)?$/;
        var nidpattern2 = /^\+?([0-9]{10})\)?$/;
        if (nidpattern.test(nid) || nidpattern1.test(nid)|| nidpattern2.test(nid) ) {

            document.getElementById("nid1").innerHTML = "";
        }
        else {
            document.getElementById("nid1").innerHTML = "NID Invalid!";
        }
    }

</script>


<script type="text/javascript">
    function validation_tin() {
        var tin = document.getElementById("tin").value;
        var tinpattern = /^\+?([0-9]{12})\)?$/;
        if (tinpattern.test(tin)) {

            document.getElementById("tin1").innerHTML = "";
        }
        else {
            document.getElementById("tin1").innerHTML = "TIN Invalid!";
        }
    }

</script>


