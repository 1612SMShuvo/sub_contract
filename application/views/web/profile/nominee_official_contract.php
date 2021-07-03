<main class="fullpage-area">
    <section class="postjob-area">
        <div class="container">
            <div class="row">
                <div class="project-slides">
                    <div class="project-singleslide">
                        <div class="row">
                            <?php
                            $user_id = $this->session->userdata("user_id");
                            $nominee = $this->Frontend_model->nominee_info($user_id);
                            if (!$nominee) {
                            ?>
                            <div class="col-md-6 mb-4">
                                <div class="signin-form postjob-form nominee">
                                    <h3>Nominee</h3>
                                    <form id="nominee_profile" method="post" action="#" enctype="multipart/form-data">
                                        <div class="postjob-det">
                                            <div class="form-single">
                                                <label for="nname">Name <span>*</span></label>
                                                <input type="text" id="nname" placeholder="Name" name="name">
                                                   <span id="u1"></span>
                                            </div>
                                            <div class="form-single">
                                                <label for="ndesi">Designation <span>*</span></label>
                                                <input type="text" id="ndesi" placeholder="Designation"
                                                       name="designation">
                                                          <span id="u2"></span>
                                            </div>
                                            <div class="form-single">
                                                <label for="nnid">NID <span>*</span></label>
                                                <input type="number" id="nnid" placeholder="NID" onkeyup="nid_verify()" name="nid">
                                                   <span id="u3"></span>
                                                <p id="nid_err" style="color:red; font-size: 12px;"></p>
                                            </div>
                                            <div class="form-single">
                                                <label for="ntin">TIN <span>*</span></label>
                                                <input type="number" id="ntin" placeholder="TIN" onkeyup="tin_verify()"  name="tin">
                                                   <span id="u4"></span>
                                                <p id="tin" style="color:red; font-size: 12px;"></p>
                                            </div>
                                            <div class="form-single">
                                                <label for="nemail">Email <span>*</span></label>
                                                <input type="email" id="nemail" placeholder="Enter Your Email Address"
                                                       name="email">
                                                          <span id="u5"></span>
                                            </div>
                                            <div class="form-single">
                                                <label for="nphone">Phone Number <span>*</span></label>
                                                <input type="tel" pattern="[0-9]{11}"  id="nphone" onkeyup="phone_verify()" placeholder="Enter Phone Number"
                                                       name="phone">
                                                          <span id="u6"></span>
                                                <p id="phone" style="color:red; font-size: 12px;"></p>
                                            </div>

                                            <div class="form-single">
                                                <label for="certificate">Profile Picture <span>*</span></label>
                                                <input type="file" id="image" name="image"
                                                       tabindex="0">
                                                          <span id="u7"></span>
                                            </div>
                                            <div class="postjob-button row pt-4">
                                                <div class="form-check mb-4 col-6">
                                                    <input class="form-check-input" type="hidden" value="1" id="nvice" name="terms_condition">
                                                </div>


                                                    <div class="postjob-button pt-3">
                                                        <div class="signin-button">
                                                            <button>
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                            </div>
                                    </form>
                                    <p id="nominee_profile_msg"
                                       style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
                                        Nominee Profile Successfully Added</p>
                                </div>
                            </div>
                            <?php } else {
                                ?>
                                <div class="col-md-6 mb-4" style="opacity: 0.5">
                                    <div class="signin-form postjob-form nominee">
                                        <h3>Nominee</h3>
										<div class="postjob-det">
                                                <div class="form-single">
                                                    <label for="nname">Name <span>*</span></label>
                                                    <input type="text" id="nname" placeholder="Name" name="name" readonly="readonly">
                                                </div>
                                                <div class="form-single">
                                                    <label for="ndesi">Designation <span>*</span></label>
                                                    <input type="text" id="ndesi" placeholder="Designation"
                                                           name="designation" readonly="readonly">
                                                </div>
                                                <div class="form-single">
                                                    <label for="nnid">NID <span>*</span></label>
                                                    <input type="number" id="nnid" placeholder="NID" name="nid" readonly="readonly">
                                                </div>
                                                <div class="form-single">
                                                    <label for="ntin">TIN <span>*</span></label>
                                                    <input type="text" id="ntin" placeholder="TIN" name="tin" readonly="readonly">
                                                </div>
                                                <div class="form-single">
                                                    <label for="nemail">Email <span>*</span></label>
                                                    <input type="email" id="nemail" placeholder="Enter Your Email Address"
                                                           name="email" readonly="readonly">
                                                </div>
                                                <div class="form-single">
                                                    <label for="nphone">Phone Number <span>*</span></label>
                                                    <input type="tel" pattern="[0-9]{11}"  id="nphone" placeholder="Enter Phone Number"
                                                           name="phone" readonly="readonly">
                                                </div>

                                                <div class="form-single">
                                                    <label for="certificate">Image * PDF <span>*</span></label>
                                                    <input type="file" id="image" name="image"
                                                           tabindex="0" readonly="readonly">
                                                </div>
                                                <div class="postjob-button row pt-4">
                                                    <div class="form-check mb-4 col-6">
                                                        <input class="form-check-input" type="hidden" value="1" id="nvice" name="terms_condition">
                                                    </div>


                                                    <div class="postjob-button pt-3">
                                                        <div class="signin-button">
                                                            <button>
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                    </div>
                                </div>


                            <?php } ?>
                        </div>
                        <div class="col-md-6  mb-4">
                            <div class="signin-form postjob-form official">
                                <h3>Official Contract Pearson</h3>
                                <form id="official_contract_profile" method="post" action="#"
                                      enctype="multipart/form-data">
                                    <div class="postjob-det">
                                        <div class="form-single">
                                            <label for="oname">Name <span>*</span></label>
                                            <input type="text" id="oname" placeholder="Name" name="name">
                                             <span id="u8"></span>
                                        </div>
                                        <div class="form-single">
                                            <label for="odesi">Designation <span>*</span></label>
                                            <input type="text" id="odesi" placeholder="Designation" name="designation">
                                             <span id="u9"></span>
                                        </div>
                                        <div class="form-single">
                                            <label for="onid">NID <span>*</span></label>
                                            <div id="error"></div>
                                            <input type="number" id="idnumber" placeholder="NID" name="nid" onkeyup="nid_verification()">
                                             <span id="u10"></span>
                                            <div id="result"> </div>
                                        <p id="enid" style="font-size: 12px; color: red;"></p>
                                        </div>
                                        <div class="form-single">
                                            <label for="otin">TIN <span>*</span></label>
                                            <input type="number" id="otin" placeholder="TIN" name="tin"  onkeyup="tin_verification()">
                                             <span id="u11"></span>
                                            <p id="etin" style="font-size: 12px; color: red;"></p>
                                        </div>
                                        <div class="form-single">
                                            <label for="oemail">Email <span>*</span></label>
                                            <input type="email" id="oemail" placeholder="Enter Your Email Address"
                                                   name="email">
                                                    <span id="u12"></span>
                                        </div>
                                        <div class="form-single">
                                            <label for="ophone">Phone Number <span>*</span></label>
                                            <input type="tel"  pattern="[0-9]{11}"  id="ophone" onkeyup="phone_verification()" placeholder="Enter Phone Number"
                                                   name="phone">
                                                    <span id="u13"></span>
                                            <p id="ephone" style="font-size: 12px; color: red;"></p>
                                        </div>
                                        <div class="postjob-button row pt-4">
                                            <div class="form-check mb-4 col-6">
                                                <input class="form-check-input" type="hidden" value="1" id="oported" name="terms_condition">
                                            </div>
                                            <div class="signin-button col-6">
                                                <button>Save</button>
                                            </div>
                                        </div>
                                </form>
                                <p id="official_contract_profile_msg"
                                   style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
                                    Official Contract Profile Successfully Added</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    $(document).ready(function () {
        $('#nominee_profile').submit(function () {
            var dataString = new FormData($(this)[0]);
             if (validation() == true) {
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>frontend/create_nominee_profile',
                data: dataString,
                async: false,
                success: function (result) {
                    if (result) {
                        $('#nominee_profile_msg').show();
                        $('#nominee_profile_msg').delay(5000).fadeOut(1000);
                        $('#nominee_profile').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>frontend/nominee_official_contract";
                        }, 3000);
                        return false;
                    } else {
                        return false;
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
             } else {
                        return false;
                    }
            return false;
        });
        function validation() {
                        var name = $('#nname').val();
                        var designation = $('#ndesi').val();
                        var nid = $('#nnid').val();
                        var tin = $('#ntin').val();
                        var email = $('#nemail').val();
                        var phone = $('#nphone').val();
                        var image = $('#image').val();
                        

                        if (name.length == "" || designation.length=="" || nid.length == "" || tin.length == "" || email.length == ""|| phone.length == ""|| image.length == "") {
                            if (name.length == "") {
                                $('#u1').html("<code class='err_msg'>* Name field is Mandatory *</code>");
                                $("#u1 .err_msg").delay(3000).fadeOut(800);
                                $("#name").focus();
                            }
                            if (designation.length == "") {
                                $('#u2').html("<code class='err_msg'>* Designation field is mandatory *</code>");
                                $("#u2 .err_msg").delay(3000).fadeOut(800);
                                $("#ndesi").focus();
                            }
                            if (nid.length == "") {
                                $('#u3').html("<code class='err_msg'>* NID Number  is mandatory *</code>");
                                $('#u3 .err_msg').delay(3000).fadeOut(800);
                                $('#nnid').focus();
                            }
                            if (tin.length == "") {
                                $('#u4').html("<code class='err_msg'>*Tin is mandatory *</code>");
                                $('#u4 .err_msg').delay(3000).fadeOut(800);
                                $('#ntin').focus();
                            }
                            if (email.length == "") {
                                $('#u5').html("<code class='err_msg'>*Email is mandatory *</code>");
                                $('#u5 .err_msg').delay(3000).fadeOut(800);
                                $('#nemail').focus();
                            }
                            if (phone.length == "") {
                                $('#u6').html("<code class='err_msg'>* Phone Number is mandatory *</code>");
                                $('#u6 .err_msg').delay(3000).fadeOut(800);
                                $('#nphone').focus();
                            }
                             if (image.length == "") {
                                $('#u7').html("<code class='err_msg'>* Profile Image is mandatory *</code>");
                                $('#u7 .err_msg').delay(3000).fadeOut(800);
                                $('#image').focus();
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
        $('#official_contract_profile').submit(function () {
            var dataString = new FormData($(this)[0]);
             if (validation() == true) {
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>frontend/create_official_contract_profile',
                data: dataString,
                async: false,
                success: function (result) {
                    if (result) {
                        $('#official_contract_profile_msg').show();
                        $('#official_contract_profile_msg').delay(5000).fadeOut(1000);
                        $('#official_contract_profile').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>frontend/registration_success";
                        }, 3000);
                        return false;
                    } else {
                        return false;
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
             } else {
                        return false;
                    }
            return false;
        });
   function validation() {
                        var oname = $('#oname').val();
                        var odesi = $('#odesi').val();
                        var idnumber = $('#idnumber').val();
                        var otin = $('#otin').val();
                        var oemail = $('#oemail').val();
                        var ophone = $('#ophone').val();

                        if (oname.length == "" || odesi.length=="" || idnumber.length == "" || otin.length == "" || oemail.length == ""|| ophone.length == "") {
                            if (oname.length == "") {
                                $('#u8').html("<code class='err_msg'>* Name field is Mandatory *</code>");
                                $("#u8 .err_msg").delay(3000).fadeOut(800);
                                $("#oname").focus();
                            }
                            if (odesi.length == "") {
                                $('#u9').html("<code class='err_msg'>* Designation field is mandatory *</code>");
                                $("#u9 .err_msg").delay(3000).fadeOut(800);
                                $("#odesi").focus();
                            }
                            if (idnumber.length == "") {
                                $('#u10').html("<code class='err_msg'>* NID Number  is mandatory *</code>");
                                $('#u10 .err_msg').delay(3000).fadeOut(800);
                                $('#idnumber').focus();
                            }
                            if (otin.length == "") {
                                $('#u11').html("<code class='err_msg'>*Tin is mandatory *</code>");
                                $('#u11 .err_msg').delay(3000).fadeOut(800);
                                $('#otin').focus();
                            }
                            if (oemail.length == "") {
                                $('#u12').html("<code class='err_msg'>*Email is mandatory *</code>");
                                $('#u12 .err_msg').delay(3000).fadeOut(800);
                                $('#oemail').focus();
                            }
                            if (ophone.length == "") {
                                $('#u13').html("<code class='err_msg'>* Phone Number is mandatory *</code>");
                                $('#u13 .err_msg').delay(3000).fadeOut(800);
                                $('#ophone').focus();
                            }
                            return false;
                        }
                        else {
                            return true
                        }
                    }

                });
</script>

<script type="text/javascript">
    function nid_verify(){
        var nnid = document.getElementById("nnid").value;
        var nnidpattern = /^\+?([0-9]{17})\)?$/;
        var nnidpattern1 = /^\+?([0-9]{13})\)?$/;
        var nnidpattern2 = /^\+?([0-9]{10})\)?$/;
        if (nnidpattern.test(nnid) || nnidpattern1.test(nnid)|| nnidpattern2.test(nnid) ) {

            document.getElementById("nid_err").innerHTML = "";
        }
        else {
            document.getElementById("nid_err").innerHTML = "NID Invalid!";
        }
    }

</script>


<script type="text/javascript">
    function tin_verify() {
        var ntin = document.getElementById("ntin").value;
        var ntinpattern = /^\+?([0-9]{12})\)?$/;
        if (ntinpattern.test(ntin)) {

            document.getElementById("tin").innerHTML = "";
        }
        else {
            document.getElementById("tin").innerHTML = "TIN Invalid!";
        }
    }

</script>


<script type="text/javascript">
    function phone_verify() {
        var nphone = document.getElementById("nphone").value;
        var nphonepattern = /^\+?([0-1]{2})\)?([0-9]{3})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{2})$/;
        if (nphonepattern.test(nphone)) {
            document.getElementById("phone").innerHTML = "";
        }
        else {
            document.getElementById("phone").innerHTML = "Phone Number Invalid!";
        }
    }

</script>

<script type="text/javascript">
    function nid_verification(){
        var idnumber = document.getElementById("idnumber").value;
        var idnumberpattern = /^\+?([0-9]{17})\)?$/;
        var idnumberpattern1 = /^\+?([0-9]{13})\)?$/;
        var idnumberpattern2 = /^\+?([0-9]{10})\)?$/;
        if (idnumberpattern.test(idnumber) || idnumberpattern1.test(idnumber)|| idnumberpattern2.test(idnumber) ) {

            document.getElementById("enid").innerHTML = "";
        }
        else {
            document.getElementById("enid").innerHTML = "NID Invalid!";
        }
    }

</script>


<script type="text/javascript">
    function tin_verification() {
        var otin = document.getElementById("otin").value;
        var otinpattern = /^\+?([0-9]{12})\)?$/;
        if (otinpattern.test(otin)) {

            document.getElementById("etin").innerHTML = "";
        }
        else {
            document.getElementById("etin").innerHTML = "TIN Invalid!";
        }
    }

</script>


<script type="text/javascript">
    function phone_verification() {
        var ophone = document.getElementById("ophone").value;
        var ophonepattern = /^\+?([0-1]{2})\)?([0-9]{3})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{2})$/;
        if (ophonepattern.test(ophone)) {
            document.getElementById("ephone").innerHTML = "";
        }
        else {
            document.getElementById("ephone").innerHTML = "Phone Number Invalid!";
        }
    }

</script>


