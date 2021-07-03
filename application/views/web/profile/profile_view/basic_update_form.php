<div class="col-md-12 mb-4">
    <div class="signin-form postjob-form basic">
        <h3>Basic</h3>
        <?php
        foreach ($update_basic as $v_basic) { ?>
            <form id="basis_profile" method="post" action="#">
                <div class="postjob-det">
                    <div class="row">
                        <div class="col-6">
                            <div class="formcheck-single mb-3">
                                <label class="form-checks mb-3">You are a</label>

                                <div class="form-check">
                                    <input class="form-check-input"  type="checkbox"
                                           name="publisher" id="publisher"
                                           value="1" <?php echo ($v_basic->publisher == 1) ? 'checked="checked"' : ''; ?>>
                                    <label class="form-check-label" for="publisher">
                                        Publisher
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input"
                                           value="2" <?php if ($v_basic->investor == 2) { ?> checked="checked" <?php } ?>
                                           type="checkbox" name="investor" id="investor">
                                    <label class="form-check-label" for="investor">
                                        Investor
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input" <?php if ($v_basic->bidder == 3) { ?> checked="checked" <?php } ?>
                                        value="3" type="checkbox" name="bidder"
                                        id="bidder">
                                    <label class="form-check-label" for="bidder">
                                        Bidder
                                    </label>
                                </div>
                            </div>


                            <div class="formcheck-single mb-3">
                                <label class="form-checks mb-3">Business Type</label>
                                <div class="form-check">
                                    <input class="form-check-input"
                                           type="radio" id="govt"
                                           value="1" <?php if ($v_basic->business_type == 1) { ?> checked="checked" <?php } ?>
                                           name="business_type">
                                    <label class="form-check-label" for="govt">
                                        Govt
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input"
                                           type="radio" <?php if ($v_basic->business_type == 2) { ?> checked="checked" <?php } ?>
                                           id="private"
                                           value="2" name="business_type">
                                    <label class="form-check-label" for="private">
                                        Private/Ltd/Group of Company
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input"
                                           type="radio" id="ngo"
                                           value="3" <?php if ($v_basic->business_type == 3) { ?> checked="checked" <?php } ?>
                                           name="business_type">
                                    <label class="form-check-label" for="ngo">
                                        NGO/NPO
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input"
                                           type="radio" id="individual"
                                           value="4" <?php if ($v_basic->business_type == 4) { ?> checked="checked" <?php } ?>
                                           name="business_type">
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
                                <input type="hidden" name="id" value="<?php echo $v_basic->id; ?>">
                                <input type="text" id="organization"
                                       placeholder="Organization Name" value="<?php echo $v_basic->organization_name ?>"
                                       name="organization_name"
                                >
                            </div>
                            <div class="form-single">
                                <label for="office_address">Office Address
                                    <span>*</span></label>
                                <input type="text" id="office_address" placeholder="Address"
                                       name="office_address" value="<?php echo $v_basic->office_address ?>">
                            </div>
                            <div class="form-single">
                                <label for="web">Web Address <span>*</span></label>
                                <input type="url" id="url" placeholder="WWW"
                                       name="web_address" onkeyup="validate()" value="<?php echo $v_basic->web_address ?>">
                                <span style="color:red" id="web"></span>
                            </div>
                            <div class="form-single">
                                <label for="nid">NID <span>*</span></label>
                                <input type="number" onblur="check_nid()" onkeyup="validation_nid1()" id="nid1" name="nid_card"
                                       placeholder="Only 10 and 13 and 17 Digit Nid Number"
                                       required="required" value="<?php echo $v_basic->nid_card; ?>">
                                <p id="enid1" style="color:red"></p>

                            </div>
                            <div class="form-single">
                                <label for="tin">TIN <span>*</span></label>
                                <input type="number" id="tin1" onblur="check_tin()" onkeyup="validation_tin1()" name="tin"
                                       placeholder="Only 12 Digit Tin Number"
                                       required="required" value="<?php echo $v_basic->tin; ?>">
                                <p id="etin1" style="color: red; font-size: 12px;"></p>

                            </div>
                            <div class="form-single">
                                <label for="tin">BIN <span>*</span></label>
                                <input type="number" id="bin1"  onkeyup="validation_bin1()" name="bin"
                                       placeholder="Only 12 Digit Tin Number"
                                       required="required" value="<?php echo $v_basic->bin; ?>">
                                <p id="ebin" style="color: red; font-size: 12px;"></p>

                            </div>
                            <div class="form-single">
                                <label for="contact">Official Contact <span>*</span></label>
                                <input type="number"  onkeyup="validation()" id="contact" placeholder="Contact Number"
                                       name="official_contact" value="<?php echo $v_basic->official_contact ?>">
                                <span style="color:red" id="num"></span>
                            </div>
                            <div class="form-single">
                                <label for="date">Established <span>*</span></label>
                                <input type="date" id="date" placeholder="Enter Your Email"
                                       name="established" value="<?php echo $v_basic->established ?>">
                            </div>
                            <div class="form-single">
                                <label class="mb-3">Number of Employees</label>
                                <select class="form-select form-select-sm"
                                        name="number_of_employees" value="<?php echo $v_basic->number_of_employees ?>">
                                    <option selected>5-10</option>
                                    <option value="1">11-20</option>
                                    <option value="2">21-30</option>
                                    <option value="3">30-50</option>
                                    <option value="3">50+</option>
                                </select>
                            </div>
                            <div class="form-single">
                                <label class="mb-3">Years of Experiences</label>
                                <select class="form-select form-select-sm"
                                        name="years_of_experiences"
                                        value="<?php echo $v_basic->years_of_experiences ?>">
                                    <option selected>1-5</option>
                                    <option value="1">6-15</option>
                                    <option value="2">16-30</option>
                                    <option value="3">30+</option>
                                </select>
                            </div>
                            <div class="form-single">
                                <label for="logo">Company Logo <span>*</span></label>
                                <input type="file" id="company_logo" name="company_logo"
                                       tabindex="0">
                            </div>

                            <div class="postjob-button pt-3">
                                <div class="signin-button">
                                    <button>Update</button>
                                </div>
                            </div>
                        </div>
                        <p id="msg_basic"
                           style="background-color: #004793;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
                            Basic information successfully updated</p>
                        <p id="msg_basic_err"
                           style="background-color: red;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
                            Your basic information already exist !!!</p>

                    </div>
                </div>
            </form>
        <?php } ?>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#basis_profile').submit(function () {
            var dataString = new FormData($(this)[0]);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>frontend/update_basic_profile',
                data: dataString,
                async: false,
                success: function (result) {
                    if (result == 1) {
                        $('#msg_basic').show();
                        $('#msg_basic').delay(6000).fadeOut(1000);
                        $('#basis_profile').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>frontend/profile_all_details";
                        }, 1000);
                        return false;
                    } else {
                        $('#msg_basic_err').show();
                        $('#msg_basic_err').delay(6000).fadeOut(1000);
                        $('#basis_profile').trigger("reset");
                        return false;
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
            return false;
        });
    });
</script>


<script type="text/javascript">
    function validation() {
        var contact = document.getElementById("contact").value;
        var contactpattern = /^\+?([0-9]{3})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
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

